 <div class="container-fluid">
 <div class="row-fluid">
 <div class="span2">
 <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Ingreso</li>
              <li onclick="$('#cuerpo').load('pages/ing_trabajos.php');"><a href="#ing_trabajos"><i class="icon-chevron-right"></i> Trabajos</a></li>  <!-- Muestra menu activo-->
              <li onclick="$('#cuerpo').load('pages/ing_gastos.php');"><a href="#ing_gastos"><i class="icon-chevron-right"></i> Gastos</a></li>
              <li onclick="$('#cuerpo').load('pages/ing_abonos.php');"><a href="#ing_abonos"><i class="icon-chevron-right"></i> Abonos</a></li>
              <li class="nav-header">Informes</li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_horascli"><i class="icon-chevron-right"></i> Horas cliente</a></li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_horasabg"><i class="icon-chevron-right"></i> Horas abogado</a></li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_gastoscli"><i class="icon-chevron-right"></i> Gastos cliente</a></li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_gastosabg"><i class="icon-chevron-right"></i> Gastos abogado</a></li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_horas"><i class="icon-chevron-right"></i> Consolidado de horas</a></li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_personal"><i class="icon-chevron-right"></i> Personal</a></li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_horasmat"><i class="icon-chevron-right"></i> Horas materia</a></li>  
              <li class="nav-header">Clientes</li>
              <li onclick="$('#cuerpo').load('pages/cli_buscar.php');"><a href="#cli_buscar"><i class="icon-chevron-right"></i> Buscar</a></li>
              <li onclick="$('#cuerpo').load('pages/cli_crear.php');"><a href="#cli_crear"><i class="icon-chevron-right"></i> Crear</a></li>
              <li onclick="$('#cuerpo').load('pages/cli_contacto.php');"><a href="#cli_contacto"><i class="icon-chevron-right"></i> Agregar contacto</a></li>                          
              <li class="nav-header">Contactos</li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#cto_buscar"><i class="icon-chevron-right"></i> Buscar</a></li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#cto_crear"><i class="icon-chevron-right"></i> Crear</a></li>
              <li class="nav-header">Facturación</li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#fact_nueva"><i class="icon-chevron-right"></i> Nueva factura</a></li>
              <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#fact_buscar"><i class="icon-chevron-right"></i> Buscar facturas</a></li>              
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