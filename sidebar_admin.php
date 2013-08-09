 <div class="container-fluid">
 <div class="row-fluid">
 <div class="span2">
 <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Usuarios</li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#usr_crear"><i class="icon-chevron-right"></i> Crear</a></li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#usr_mod"><i class="icon-chevron-right"></i> Modificar</a></li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#usr_tar"><i class="icon-chevron-right"></i> Tarifas</a></li>
              <li class="nav-header">Perfiles</li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#perf_adm"><i class="icon-chevron-right"></i> Administrar</a></li>  
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#perf_perm"><i class="icon-chevron-right"></i> Permisos</a></li>                             
              <li class="nav-header">Clientes</li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#cli_tar"><i class="icon-chevron-right"></i> Tarifa</a></li>
              <li class="nav-header">Contactos</li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#cto_tipo"><i class="icon-chevron-right"></i> Tipos</a></li> 
              <li class="nav-header">Materia</li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_crear"><i class="icon-chevron-right"></i> Crear</a></li> 
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_editar"><i class="icon-chevron-right"></i> Editar</a></li> 
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_tipo"><i class="icon-chevron-right"></i> Tipos</a></li>               
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_estdo"><i class="icon-chevron-right"></i> Estados</a></li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mat_tar"><i class="icon-chevron-right"></i> Tarifas</a></li>   
              <li class="nav-header">Facturación</li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#fact_estdo"><i class="icon-chevron-right"></i> Estados</a></li>
              <li class="nav-header">Monedas</li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mon_crear"><i class="icon-chevron-right"></i> Crear</a></li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#mon_edit"><i class="icon-chevron-right"></i> Editar</a></li> 
              <li class="nav-header">Admin</li>
              <li onclick="$('#cuerpo').load('pages_admin/default.php');"><a href="#editor"><i class="icon-chevron-right"></i> Editor registros BD</a></li>                                                                                                             
            </ul>
</div>
 </div>
 <div class="span10"> <!-- style="background-color: lightgrey" -->
 <div class="container-fluid">
 <ul class="nav nav-pills pull-right">
 <li><a href="index.php"><i class="icon-home"></i> Inicio</a></li>
 <li><a href="admin.php"><i class="icon-wrench"></i> Administración</a></li>
 <li><a href="login.php"><i class="icon-off"></i> Salir</a></li>
 </ul>
 </div>

 <div class="row-fluid" id="main-box">