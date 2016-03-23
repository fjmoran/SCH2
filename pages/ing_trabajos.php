<?php
require_once "../recursos/zhi/CreaConnv2.php";
$today = date("d-m-Y");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "select * from Trabajo";	

?>
<div class="col-md-11">
<h2>Trabajos</h2>
<h5>Seleccione la fecha que desea vizualizar</h5>

<div class="row">
  <div class="input-group col-md-3">
    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
  	<input type="text" class="form-control" id="cal1" placeholder="Seleccione una fecha" readonly="true" value=<?php echo $today; ?> >
  </div>
</div>

<br>
	<a href="#agregar" role="button" class="btn btn-sm btn-success pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

<h4>Últimos trabajos ingresados</h4></br>

<table class="table table-striped table-condensed">
  <thead style="text-align: center; color:#428BCA;">
    <tr>
      <th width=15%>Fecha</th>
      <th width=30%>Cliente</th>
      <th width=30%>Materia</th>
      <th width=15%>Tiempo cargado</th>
      <th width=10%>Acciones</th>
    </tr>
  </thead>
  <tbody>
<?php

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    	echo "<tr>
      <td> {$row['fechaTrabajo']}</td>    	
      <td> {$row['Materia_Cliente_idCliente']}</td>
      <td>{$row['Materia_idMateria']}</td>
      <td>{$row['tiempoTrabajo']} hrs.</td>
      <td><span class=\"glyphicon glyphicon-lock\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Facturado\"></span></td>
    </tr>";
    }

    /* free result set */
    $result->free();
}
?>  
  </tbody>
</table>

<div class="col-md-12 text-center">
  <ul class="pagination pagination-sm" >
    <li><a href="#">Anterior</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">Siguiente</a></li>
  </ul>
</div>
  
</div><!-- col-md-10 -->

<!-- Modal 1 -->
<div id="agregar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="agregarLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de Trabajo</h4>
      </div>
      <form role="form">
        <div class="modal-body">
          <div class="row"> 
            <div class="col-md-6">
              <div class="form-group ui-widget"> 
                <label for="lbl_nombre">Cliente:</label>
                <input id="nombre" class="form-control" type="text" placeholder="Nombre del cliente">
                <input id="nombre-id" type="text" hidden>
              </div> 
              <div class="form-group">
                <label for="horas">Horas:</label>
                  <select id="horas" class="form-control">            
                    <option>1</option>              
                    <option>2</option>
                    <option>3</option>  
                    <option>4</option>  
                    <option>5</option>  
                    <option>6</option>
                    <option>7</option>  
                    <option>8</option>  
                    <option>9</option>                                                                                              
                  </select>          
              </div>              
            </div>  
            <div class="col-md-6">
              <div class="form-group ui-widget"> 
                <label id="lbl_materia" for="materia">Materia:</label>
                <input id="materia" class="form-control" type="text" placeholder="Materia">
              </div>
              <div class="form-group">
                <label for="minutos">Minutos:</label>
                  <select id="minutos" class="form-control"> 
                    <option>0</option>                              
                    <option>15</option>              
                    <option>30</option>
                    <option>45</option>                                                                                              
                  </select>          
              </div>               
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> 
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" class="form-control" rows="3"></textarea>
              </div>
            </div>             
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->  
<!-- Fin Modal 1 -->
<!-- Modal 2 -->
<div id="editar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="agregarLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Edición de Trabajo</h4>
      </div>

      <form role="form">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="cal2">Fecha:</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                  <input type="text" class="form-control" id="cal2" placeholder="Seleccione una fecha" readonly="true">
                </div>
              </div>
            </div>  
          </div>  
          <div class="row"> 
            <div class="col-md-6">
              <div class="form-group"> 
                <label for="nombre">Cliente:</label>
                <input id="nombre" class="form-control" placeholder="Nombre del cliente">
                <input id="nombre-id" type="text" value="" hidden>
              </div> 
              <div class="form-group">
                <label for="horas">Horas:</label>
                  <select id="horas" class="form-control">            
                    <option>1</option>              
                    <option>2</option>
                    <option>3</option>  
                    <option>4</option>  
                    <option>5</option>  
                    <option>6</option>
                    <option>7</option>  
                    <option>8</option>  
                    <option>9</option>                                                                                              
                  </select>          
              </div>              
            </div>  
            <div class="col-md-6">
              <div class="form-group"> 
                <label id="lbl_materia" for="materia" >Materia:</label>
                <input id="materia" class="form-control" type="text" placeholder="Materia">
              </div>
              <div class="form-group">
                <label for="minutos">Minutos:</label>
                  <select id="minutos" class="form-control"> 
                    <option>0</option>                              
                    <option>15</option>              
                    <option>30</option>
                    <option>45</option>                                                                                              
                  </select>          
              </div>               
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> 
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" class="form-control" rows="3"></textarea>
              </div>
            </div>             
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">guardar</button>
        </div>
      </form>
      
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->
<!-- Fin Modal 2 -->

    <script type="text/javascript"> 

      $(document).ready(function(){

        /* Calendario 1*/       
        $('#cal1').datepicker();
        /* Calendario 2*/       
        $('#cal2').datepicker();        
        /* Tooltip */
        $('.table').tooltip({
          selector: "[rel=tooltip]"
         })
      });

        /* Autocomplete nombre */
     $(function() {
    var projects = [
      {
        value: "jquery",
        label: "jQuery",
        desc: "the write less, do more, JavaScript library",
        icon: "jquery_32x32.png"
      },
      {
        value: "jquery-ui",
        label: "jQuery UI",
        desc: "the official user interface library for jQuery",
        icon: "jqueryui_32x32.png"
      },

 <?php
 
$query = "select idCliente, nombreCliente from Cliente order by nombreCliente";
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    $cantresult = $result->num_rows; 
    $contresult = 0;
    while ($row = $result->fetch_assoc()) {
    	echo "{
      value: \"{$row['idCliente']}\",
      label: \"{$row['nombreCliente']}\"
      }";
      
      if ($conresult < $cantresult) { echo ","; }
      $contresult ++;
    }

    /* free result set */
    $result->free();
}
?>  
          ];
    $( "#nombre" ).autocomplete({
      minLength: 0,
      source: projects,
      focus: function( event, ui ) {
        $( "#nombre" ).val( ui.item.label );
        return false;
      },
      select: function( event, ui ) {
        $( "#nombre" ).val( ui.item.label );
        $( "#nombre-id" ).val( ui.item.value );
 
        return false;
      }
    })
  });          

        $(function() { 
          var availableTags = [
            "AZtionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme",
            "Aperro", 
            "AGato",
            "Acanario",
            "Aleon"           
          ];
          $("#materia").autocomplete({
            source: availableTags
          });
        });        

    </script>      

<?php
/* incluye script para hacer el cambio de los nombres en los labels */
include ("../recursos/zhi/replace_label.php");
?>