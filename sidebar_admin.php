 <div class="container">
 <div class="row">
   <div class="col-md-2">
     <div class="bs-sidebar">
      <ul class="nav bs-sidenav">
        <li class="nav-header">Mantenedores</li>
        <li onclick="$('#cuerpo').load('pages_admin/usr_mod.php');"><a href="#usr_mod"><span class="glyphicon glyphicon-chevron-right"></span> Usuarios</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/roles_mod.php');"><a href="#roles_mod"><span class="glyphicon glyphicon-chevron-right"></span> Roles</a></li>  
        <li onclick="$('#cuerpo').load('pages_admin/roles_perm_mod.php');"><a href="#roles_perm_mod"><span class="glyphicon glyphicon-chevron-right"></span> Permisos por rol</a></li>       
        <li onclick="$('#cuerpo').load('pages_admin/cli_tar_mod.php');"><a href="#cli_tar_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tarifas por cliente</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/cto_tipo_mod.php');"><a href="#cto_tipo_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de contacto</a></li> 
        <li onclick="$('#cuerpo').load('pages_admin/mat_mod.php');"><a href="#mat_mod"><span class="glyphicon glyphicon-chevron-right"></span> Materias</a></li> 
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_tipo_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de materia</a></li>       
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_tar_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tarifas por materia</a></li>   
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#fact_estdo_mod"><span class="glyphicon glyphicon-chevron-right"></span> Estados de factura</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/mon_mod.php');"><a href="#mon_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de moneda</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/abono_mod.php');"><a href="#abono_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de abono</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/gasto_mod.php');"><a href="#gasto_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de gasto</a></li>                
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#feriados_mod"><span class="glyphicon glyphicon-chevron-right"></span> Feriados legales</a></li>
        <li class="nav-header">Parámetros</li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#pais_mod"><span class="glyphicon glyphicon-chevron-right"></span> Países</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#region_mod"><span class="glyphicon glyphicon-chevron-right"></span> Regiónes</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#comuna_mod"><span class="glyphicon glyphicon-chevron-right"></span> Comunas</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#concep_mod"><span class="glyphicon glyphicon-chevron-right"></span> Conceptos</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#label_mod"><span class="glyphicon glyphicon-chevron-right"></span> Labels</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#menu_mod"><span class="glyphicon glyphicon-chevron-right"></span> Menú</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#paginas_mod"><span class="glyphicon glyphicon-chevron-right"></span> Páginas</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#param_mod"><span class="glyphicon glyphicon-chevron-right"></span> Parámetros Globales</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#perm_con_mod"><span class="glyphicon glyphicon-chevron-right"></span> Permisos concepto</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#perm_menu_mod"><span class="glyphicon glyphicon-chevron-right"></span> Permisos menú</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#perm_pag_mod"><span class="glyphicon glyphicon-chevron-right"></span> Permisos página</a></li>                                                
        <li class="nav-header">Información del Sistema</li>
        <li onclick="$('#cuerpo').load('pages_admin/version.php');"><a href="#version"><span class="glyphicon glyphicon-chevron-right"></span> Versión</a></li>  
        <li onclick="$('#cuerpo').load('pages_admin/licencia.php');"><a href="#licencia"><span class="glyphicon glyphicon-chevron-right"></span> Licencia</a></li>                                                                                                                    
      </ul>
    </div>
   </div>
   <div class="col-md-10"> <!-- style="background-color: lightgrey" -->
     <div class="container">

      <div class="btn-group pull-right">
        <a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
        <a class="btn btn-default" href="informes.php"><span class="glyphicon glyphicon-file"></span> Informes</a>          
        <a class="btn btn-default" href="admin.php"><span class="glyphicon glyphicon-wrench"></span> Administración</a>       
        <a class="btn btn-default" href="login.php"><span class="glyphicon glyphicon-off"></span> Salir</a>
      </div>
      
     </div>

  <div class="row" id="main-box">
  <!-- divs se cierran en footer -->  