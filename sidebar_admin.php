 <div class="container">
 <div class="row">
   <div class="col-md-2">
     <div class="bs-sidebar">
      <ul class="nav bs-sidenav">
        <li class="nav-header">Mantenedores</li>
        <li onclick="$('#cuerpo').load('pages_admin/usr_mod.php');"><a href="#usr_mod"><span class="glyphicon glyphicon-chevron-right"></span> Usuarios</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/roles_mod.php');"><a href="#roles_mod"><span class="glyphicon glyphicon-chevron-right"></span> Roles</a></li>  
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#roles_perm"><span class="glyphicon glyphicon-chevron-right"></span> Permisos por rol</a></li>       
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#cli_tar"><span class="glyphicon glyphicon-chevron-right"></span> Tarifa cliente</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#cto_tipo"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de contacto</a></li> 
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_mod"><span class="glyphicon glyphicon-chevron-right"></span> Materias</a></li> 
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_tipo"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de materias</a></li>       
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_tar"><span class="glyphicon glyphicon-chevron-right"></span> Tarifas por materia</a></li>   
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#fact_estdo"><span class="glyphicon glyphicon-chevron-right"></span> Estados de facturas</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mon_mod"><span class="glyphicon glyphicon-chevron-right"></span> Tipos de monedas</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#feriados"><span class="glyphicon glyphicon-chevron-right"></span> Feriados legales</a></li> 
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
        <a class="btn btn-default" href="admin.php"><span class="glyphicon glyphicon-wrench"></span> Administración</a>
        <a class="btn btn-default" href="login.php"><span class="glyphicon glyphicon-off"></span> Salir</a>
      </div>
      
     </div>

  <div class="row" id="main-box">
  <!-- divs se cierran en footer -->  