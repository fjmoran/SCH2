 <div class="container">
 <div class="row">
   <div class="col-md-2">
     <div class="bs-sidebar">
      <ul class="nav bs-sidenav">
        <li class="nav-header">Usuarios</li>
        <li onclick="$('#cuerpo').load('pages_admin/usr_crear.php');"><a href="#usr_crear"><span class="glyphicon glyphicon-chevron-right"></span> Crear</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#usr_mod"><span class="glyphicon glyphicon-chevron-right"></span> Modificar</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#usr_tar"><span class="glyphicon glyphicon-chevron-right"></span> Tarifas</a></li>
        <li class="nav-header">Perfiles</li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#perf_adm"><span class="glyphicon glyphicon-chevron-right"></span> Administrar</a></li>  
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#perf_perm"><span class="glyphicon glyphicon-chevron-right"></span> Permisos</a></li>                             
        <li class="nav-header">Clientes</li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#cli_tar"><span class="glyphicon glyphicon-chevron-right"></span> Tarifa</a></li>
        <li class="nav-header">Contactos</li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#cto_tipo"><span class="glyphicon glyphicon-chevron-right"></span> Tipos</a></li> 
        <li class="nav-header">Materia</li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_crear"><span class="glyphicon glyphicon-chevron-right"></span> Crear</a></li> 
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_editar"><span class="glyphicon glyphicon-chevron-right"></span> Editar</a></li> 
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_tipo"><span class="glyphicon glyphicon-chevron-right"></span> Tipos</a></li>               
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_estdo"><span class="glyphicon glyphicon-chevron-right"></span> Estados</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_tar"><span class="glyphicon glyphicon-chevron-right"></span> Tarifas</a></li>   
        <li class="nav-header">Facturación</li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#fact_estdo"><span class="glyphicon glyphicon-chevron-right"></span> Estados</a></li>
        <li class="nav-header">Monedas</li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mon_crear"><span class="glyphicon glyphicon-chevron-right"></span> Crear</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mon_edit"><span class="glyphicon glyphicon-chevron-right"></span> Editar</a></li> 
        <li class="nav-header">Admin</li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#editor"><span class="glyphicon glyphicon-chevron-right"></span> Editor registros BD</a></li>
        <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#feriados"><span class="glyphicon glyphicon-chevron-right"></span> Feriados legales</a></li>                                                                                                             
      </ul>
    </div>
   </div>
   <div class="col-md-10"> <!-- style="background-color: lightgrey" -->
     <div class="container">
       <ul class="nav nav-pills pull-right">
         <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
         <li><a href="admin.php"><span class="glyphicon glyphicon-wrench"></span> Administración</a></li>
         <li><a href="login.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
       </ul>
     </div>

  <div class="row" id="main-box">
  <!-- divs se cierran en footer -->  