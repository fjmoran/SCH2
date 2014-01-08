 <?php
require_once("recursos/zhi/auth.php");
require_once("recursos/zhi/CreaConnv2.php");
require_once("recursos/zhi/funciones.php");
?>
 <div class="container">
 <div class="row">
   <div class="col-md-2">
     <div class="bs-sidebar">
      <ul class="nav bs-sidenav">
        <?php
          // Se selecciona el id del padre que invoca.
          $select_padre = "select Menu.idMenu, Menu.nivelMenu from Menu, Pagina where Pagina.urlPagina='admin.php' and Menu.Pagina_idPagina = Pagina.idPagina";
          if ($rs_padre = comando_mysql($select_padre,$mysqli)){
            $fila = $rs_padre->fetch_array();
            $idMenuPadre = $fila[0];
            $nivelMenuPadre = $fila[1];
            $rs_padre->free();
          }
          // se definen los formatos tanto para los titulos como para los item del menu
          $title = "<li class=\"nav-header\">%s</li>";
          $item = "<li onclick=\"$('#cuerpo').load('%s');\"><a href=\"%s\"><span class=\"%s\"></span> %s</a></li>";

          // Se selecciona unicamente del Menu para saber cuales son todos los elementos que componen el Menu.
          $nivelMenu = $nivelMenuPadre + 1 ;
          $select_menu1 = "select Menu.posicionMenu, Menu.Pagina_idPagina as pagina, Menu.nombreMenu as nombre, Menu.spanclassMenu as class from Menu where Menu.nivelMenu='".$nivelMenu."' and Menu.activoMenu = '1' and Menu.Menu_idMenu ='".$idMenuPadre."' ORDER BY Menu.posicionMenu";
          if($rs_menu1 = comando_mysql($select_menu1,$mysqli)){
            while($fila = $rs_menu1->fetch_assoc()){
              if (empty($fila['pagina'])){ // si es un titulo del menu no tiene pagina asociada
                printf($title,$fila['nombre']);
              }else{
                //si no es titulo tiene pagina, por lo que es necesario ir a buscar la información de la pagina
                $select_pagina = "select nombrePagina as URL, urlPagina as href from Pagina where idPagina = '".$fila['pagina']."'";
                if ($rs_pagina = comando_mysql($select_pagina,$mysqli)){
                  $fila_pagina = $rs_pagina->fetch_assoc();
                  printf($item,$fila_pagina['URL'],$fila_pagina['href'],$fila['class'],$fila['nombre']);
                  $rs_pagina->free();
                } 
              }
            }
            $rs_menu1->free();
          }
        ?>
        <!--
        <li class="nav-header">Mantenedores</li>
        <li onclick="$('#cuerpo').load('pages_admin/usr_mod.php');"><a href="#usr_mod"><span class="glyphicon glyphicon-chevron-right"></span> Usuarios</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/roles_mod.php');"><a href="#roles_mod"><span class="glyphicon glyphicon-chevron-right"></span> Roles</a></li>  
        <li onclick="$('#cuerpo').load('pages_admin/roles_perm_mod.php');"><a href="#roles_perm_mod"><span class="glyphicon glyphicon-chevron-right"></span> Permisos por rol</a></li>       
        <li onclick="$('#cuerpo').load('pages_admin/cto_tipo_mod.php');"><a href="#cto_tipo_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de contacto</a></li> 
        <li onclick="$('#cuerpo').load('pages_admin/mat_mod.php');"><a href="#mat_mod"><span class="glyphicon glyphicon-chevron-right"></span> Materias</a></li> 
        <li onclick="$('#cuerpo').load('pages_admin/mat_tipo_mod.php');"><a href="#mat_tipo_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de materia</a></li>       
        <li onclick="$('#cuerpo').load('pages_admin/mat_tar_mod.php');"><a href="#mat_tar_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tarifas por materia</a></li>   
        <li onclick="$('#cuerpo').load('pages_admin/fact_estdo_mod.php');"><a href="#fact_estdo_mod"><span class="glyphicon glyphicon-chevron-right"></span> Estados de factura</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/mon_mod.php');"><a href="#mon_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de moneda</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/tipo_abono_mod.php');"><a href="#tipo_abono_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de abono</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/tipo_gasto_mod.php');"><a href="#tipo_gasto_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de gasto</a></li>                
        <li onclick="$('#cuerpo').load('pages_admin/feriados_mod.php');"><a href="#feriados_mod"><span class="glyphicon glyphicon-chevron-right"></span> Feriados legales</a></li>
        <li class="nav-header">Parámetros</li>
        <li onclick="$('#cuerpo').load('pages_admin/pais_mod.php');"><a href="#pais_mod"><span class="glyphicon glyphicon-chevron-right"></span> Países</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/region_mod.php');"><a href="#region_mod"><span class="glyphicon glyphicon-chevron-right"></span> Regiones</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/comuna_mod.php');"><a href="#comuna_mod"><span class="glyphicon glyphicon-chevron-right"></span> Comunas</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/label_mod.php');"><a href="#label_mod"><span class="glyphicon glyphicon-chevron-right"></span> Labels</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/menu_mod.php');"><a href="#menu_mod"><span class="glyphicon glyphicon-chevron-right"></span> Menú</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/paginas_mod.php');"><a href="#paginas_mod"><span class="glyphicon glyphicon-chevron-right"></span> Páginas</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/param_mod.php');"><a href="#param_mod"><span class="glyphicon glyphicon-chevron-right"></span> Parámetros Globales</a></li>                                               
        <li class="nav-header">Información del Sistema</li>
        <li onclick="$('#cuerpo').load('pages_admin/version.php');"><a href="#version"><span class="glyphicon glyphicon-chevron-right"></span> Versión</a></li>  
        <li onclick="$('#cuerpo').load('pages_admin/licencia.php');"><a href="#licencia"><span class="glyphicon glyphicon-chevron-right"></span> Licencia</a></li>  -->
      </ul>
    </div>
   </div>
   <div class="col-md-10"> <!-- style="background-color: lightgrey" -->
     <div class="container">

      <div class="btn-group pull-right">
        <?php
          $generic_anchor = "<a class=\"btn btn-default\" href=\"%s\"><span class=\"%s\"></span> %s</a>";
          $select_menu0 = "select Menu.nombreMenu as nombre, Menu.spanclassMenu as class,Pagina.urlPagina as URL from Menu, Pagina where nivelMenu='0' AND activoMenu='1' AND Menu.Pagina_idPagina = Pagina.idPagina ORDER BY posicionMenu ASC;";
          if ($rs_menu0 = comando_mysql($select_menu0,$mysqli)){
            while ($fila = $rs_menu0->fetch_assoc()){
              printf($generic_anchor,$fila['URL'],$fila['class'],$fila['nombre']);
            }
            $rs_menu0->free();
          }
        ?>
      </div>
      
     </div>

  <div class="row" id="main-box">
  <!-- divs se cierran en footer -->  