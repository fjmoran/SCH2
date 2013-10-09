<?php

if (isset($_GET['debug'])) { echo "Generador de Formularios automatico </br>";}

require_once "CreaConnv2.php";
require_once "auth.php";

if (!defined('ENT_SUBSTITUTE')) {
    define('ENT_SUBSTITUTE', 8);
}

$table = substr($_GET['table'],strpos($_GET['table'],".")+1);
$schema = substr($_GET['table'],0,strpos($_GET['table'],"."));

$script = "";

$select = "select ";

// se arma el select enviado por el usuario
if (isset($_GET['select'])) { 
	$select = $select . $_GET['select'];
}
else { 
	$select = $select . "*";
}

$select = $select ." from ". $_GET['table']; 

if (isset($_GET['where'])) { 
	$select = $select." where ".$_GET['where'];
}

if (isset($_GET['debug'])) {echo $select ."</br>";}

$rs = $mysqli->query($select);
if (!$rs) {
	echo "Falló al ejecutar la consulta: (". $mysqli->errno .") ". $mysqli->error;
}

if (isset($_GET['debug'])) {
	echo "Numero de Filas ". $rs->num_rows."</br>";
	echo "====================</br>";
}

$info_campo = $rs->fetch_fields();
if (isset($_GET['debug'])){ print_r($info_campo);}
$info_fila = $rs->fetch_assoc();
if (isset($_GET['debug'])){ print_r($info_fila);}
$rs->free();

$arreglo_campos_formulario = array();
$llave_primaria = array();

foreach ($info_campo as $valor) {
  
  $campo_formulario = "";

  if (isset($_GET['debug'])) {
    printf("Nombre:        %s</br>", $valor->name);
    printf("Tabla:         %s</br>", $valor->table);
    printf("Longitud max.: %d</br>", $valor->max_length);
    printf("Banderas:      %d</br>", $valor->flags);
    printf("Tipo:          %d</br>", $valor->type);
  }
   switch ($valor->type) {
    case 4:
    case 252:
    case 253: $campo_formulario = "<label for=\"".$valor->orgname."\">".htmlentities($valor->name,ENT_SUBSTITUTE,'UTF-8').":</label><input id=\"".$valor->orgname."\" class=\"form-control\" type=\"text\" name=\"".$valor->orgname."\"";
              if ((isset($_GET['where'])) and ($rs->num_rows)){
                $campo_formulario .= "value=\"".$info_fila[$valor->name]."\"";
              }
              $campo_formulario .= " >";
              break;
    case 1: $campo_formulario = "<label for=\"".$valor->orgname."\">".htmlentities($valor->name,ENT_SUBSTITUTE,'UTF-8').":</label><div class=\"checkbox\"><label><input type=\"checkbox\" value=\"1\" name=\"".$valor->orgname ."\"";
            if ((isset($_GET['where'])) and ($rs->num_rows)){
              if ($info_fila[$valor->name]){
                $campo_formulario .= "checked";
              }
            }else{
              $campo_formulario .= " checked";
            }
            $campo_formulario .= " > Activo</label></div>";
            break;
    case 10:
      if(isset($_GET['debug'])) { echo "Es del tipo Fecha </br>";}
        $campo_formulario .= "<div class=\"form-group\">";
        $campo_formulario .= "<label for=\"".$valor->orgname."\">Fecha:</label>";
        $campo_formulario .= "<div class=\"input-group\">";
        $campo_formulario .= "<span class=\"input-group-addon\">";
        $campo_formulario .= "<span class=\"glyphicon glyphicon-th\"></span>";
        $campo_formulario .= "</span>";
        $campo_formulario .= "<input type=\"text\" class=\"form-control\" id=\"".$valor->orgname."\" name=\"".$valor->orgname."\" placeholder=\"Seleccione una fecha\" readonly=\"true\">";
        $campo_formulario .= "</div>";
        $campo_formulario .= "</div>";

        $script .= "<script type=\"text/javascript\">\n";
        $script .= "$(document).ready(function(){";
        $script .= "$('#".$valor->orgname."').datepicker();";
        $script .= "})\n";
        $script .= "</script>";

      break;
    case 3:
      if (!($valor->flags & 2)) {
        // No es llave primaria, por lo que es una referencia.
        if (isset($_GET['debug'])) { echo "No es Llave Primaria</br>"; }
        $query = "select REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME from information_schema.key_column_usage where column_name = '".$valor->orgname."' and table_name='".$table."'";
        if (isset($_GET['debug'])) { echo $query."</br>"; }
        $rsfk = $mysqli->query($query);
        $info = $rsfk->fetch_assoc();
        if (isset($_GET['debug'])) { print_r ($info); echo "</br>"; }
        $rsfk->free();

      } else {
        // Llave Primaria, puede ser compuesta o simple. En caso de ser compuesta hay que ver que se muestren los campos que son referencia de otra tabla.
        // se crea arreglo con los datos de los campos de la llave despues se vera si se despliega o no.
        if ($valor->flags & 16384) { 
          if (isset($_GET['debug'])) {echo "Es parte de una Llave ".$valor->orgname."</br>";}
          array_push($llave_primaria,$valor->orgname);
          if (isset($_GET['debug'])) {print_r($llave_primaria); echo "</br>";}
          $query = "select REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME from information_schema.key_column_usage where column_name = '".$valor->orgname."' and table_name='".$table."'";
          if (isset($_GET['debug'])) { echo $query."</br>"; }
          $rspk = $mysqli->query($query);
          if ($rspk->num_rows > 1) {
            if (isset($_GET['debug'])) {echo "Son mas de una fila </br>"; }
            $rspk->data_seek(1);
          }
          $info = $rspk->fetch_assoc();
          if (isset($_GET['debug'])) { print_r ($info); echo "</br>"; }
          $rspk->free();

        }
      }

      if($info['REFERENCED_TABLE_NAME'] == NULL){
        if (!($valor->flags & 512)){ 
          $campo_formulario = "<label for=\"".$valor->orgname."\">".htmlentities($valor->name,ENT_SUBSTITUTE,'UTF-8').":</label><input id=\"".$valor->orgname."\" class=\"form-control\" type=\"text\" name=\"".$valor->orgname."\"";
          if ((isset($_GET['where'])) and ($rs->num_rows)){
            $campo_formulario .= "value=\"".$info_fila[$valor->name]."\"";
          }
          $campo_formulario .= " >";
        }
      }else {
        if (isset($_GET['debug'])) { echo " Es un Foreign Key de la tabla ".$info['REFERENCED_TABLE_NAME']."</br>"; }
        $select_list = "select ".$info['REFERENCED_COLUMN_NAME']." as id, nombre".$info['REFERENCED_TABLE_NAME']." as nombre from ".$schema.".".$info[REFERENCED_TABLE_NAME]." where activo".$info[REFERENCED_TABLE_NAME]."='1'";
        if (isset($_GET['debug'])) { echo "Query Foreign Key ".$select_list."</br>"; }
        $rs_list_fk = $mysqli->query($select_list);
        $campo_formulario = "<label for=\"".$valor->orgname."\">".$valor->name.":</label><select name=\"".$valor->orgname."\" class=\"form-control\">";
        while ($list_fk=$rs_list_fk->fetch_assoc()) {
          $campo_formulario .= "<option value=\"".$list_fk['id']."\">".$list_fk['nombre']."</option>";
        }
        $rs_list_fk->free();
        $campo_formulario .= "</select>";
      }

      break;
      case 254:
        if (isset($_GET['debug'])) { echo "Tipo SET </br>";}
        //Acá va lo que se tiene que hacer con el tipo set
        $show_setvalues = "show columns from ".$_GET['table']." LIKE '".$valor->orgname."'";
        $rs_setvalues = $mysqli->query($show_setvalues);
        $array_setvalues = $rs_setvalues->fetch_assoc();
        
        if (isset($_GET['debug'])) {echo "Array set values : ";print_r($array_setvalues);echo "</br>";}

        $line_values = $array_setvalues['Type'];
        $line_values = substr($line_values,4,-1);
        $line_values = str_replace("'","",$line_values);
        
        if (isset($_GET['debug'])) {echo "line values : ";print_r($line_values);echo "</br>";}

        $values = explode(",",$line_values);

        if (isset($_GET['debug'])) {echo "valores del SET : ";print_r($values);echo "</br>";}

        $campo_formulario = "<label for=\"".$valor->orgname."\">".$valor->name.":</label><select name=\"".$valor->orgname."\" class=\"form-control\">";
        foreach ($values as $val){
          $campo_formulario .= "<option value=\"".$val."\">".$val."</option>";
        }
        $campo_formulario .= "</select>";

        $rs_setvalues->free();

        break;
      
      default: //cualquier cosa que no esta clasificada pasara por esto.
        if(isset($_GET['debug'])) {echo "Tipo no clasificado ".$valor->type; echo "</br>";}
        break;
    }  
  array_push($arreglo_campos_formulario, $campo_formulario);
  if (isset($_GET['debug'])) {echo "====================</br>";}
}
if (isset($_GET['debug'])) {print_r ($arreglo_campos_formulario); echo "</br>";}

?>
	<form role="form" method="POST" action="recursos/zhi/insert_generic.php" target="IframeOutput">
    <div class="row"> 
      <div class="col-md-6"> <!-- columna uno -->
        <?php
          for ($i=0; $i <= count($arreglo_campos_formulario) -1; $i += 2){
            echo "<div class=\"form-group\">";
            echo $arreglo_campos_formulario[$i];
            echo "</div>";
          }
        ?>
      </div>
    <div class="col-md-6"> <!-- columna dos -->
        <?php
          for ($i=1; $i <= count($arreglo_campos_formulario) -1; $i += 2){
            echo "<div class=\"form-group\">";
            echo $arreglo_campos_formulario[$i];
            echo "</div>";
          }
        ?>
    </div>
  </div>

  <div class="row pull-right"> <!-- fila para botones -->
    <div class="col-md-12">
      <p>
        <button class="btn btn-default" type="reset" onclick= "<?php echo ($_GET['jquery']); ?>" >Cancelar</button>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </p>
    </div>
  </div> 
  <input type="hidden" name="table" value="<?php echo $_GET['table']; ?>">
  <input type="hidden" name="select" value="<?php echo $_GET['select']; ?>">
  <input type="hidden" name="jquery" value="<?php echo $_GET['jquery'];?>">
  <input type="hidden" name="debug" value="1">
  
</form>	

<?php echo $script; ?>