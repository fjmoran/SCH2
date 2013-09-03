<div class="container">
<div class="row">
  <div class="col-md-2">
    <div class="bs-sidebar">
      <ul class="nav bs-sidenav">
        <li class="nav-header">Ingreso</li>
        <li onclick="$('#cuerpo').load('pages/ing_trabajos.php');"><a href="#ing_trabajos"><span class="glyphicon glyphicon-chevron-right"></span> Trabajos</a></li>  <!-- Muestra menu activo-->
        <li onclick="$('#cuerpo').load('pages/ing_gastos.php');"><a href="#ing_gastos"><span class="glyphicon glyphicon-chevron-right"></span> Gastos</a></li>
        <li onclick="$('#cuerpo').load('pages/ing_abonos.php');"><a href="#ing_abonos"><span class="glyphicon glyphicon-chevron-right"></span> Abonos</a></li>
        <li class="nav-header">Informes</li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_horascli"><span class="glyphicon glyphicon-chevron-right"></span> Horas cliente</a></li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_horasabg"><span class="glyphicon glyphicon-chevron-right"></span> Horas abogado</a></li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_gastoscli"><span class="glyphicon glyphicon-chevron-right"></span> Gastos cliente</a></li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_gastosabg"><span class="glyphicon glyphicon-chevron-right"></span> Gastos abogado</a></li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_horas"><span class="glyphicon glyphicon-chevron-right"></span> Consolidado de horas</a></li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_personal"><span class="glyphicon glyphicon-chevron-right"></span> Personal</a></li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#inf_horasmat"><span class="glyphicon glyphicon-chevron-right"></span> Horas materia</a></li>  
        <li class="nav-header">Clientes</li>
        <li onclick="$('#cuerpo').load('pages/cli_buscar.php');"><a href="#cli_buscar"><span class="glyphicon glyphicon-chevron-right"></span> Buscar</a></li>
        <li onclick="$('#cuerpo').load('pages/cli_crear.php');"><a href="#cli_crear"><span class="glyphicon glyphicon-chevron-right"></span> Crear</a></li>
        <li onclick="$('#cuerpo').load('pages/cli_contacto.php');"><a href="#cli_contacto"><span class="glyphicon glyphicon-chevron-right"></span> Agregar contacto</a></li>                          
        <li class="nav-header">Contactos</li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#cto_buscar"><span class="glyphicon glyphicon-chevron-right"></span> Buscar</a></li>
        <li onclick="$('#cuerpo').load('pages/cto_crear.php');"><a href="#cto_crear"><span class="glyphicon glyphicon-chevron-right"></span> Crear</a></li>
        <li class="nav-header">Facturación</li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#fact_nueva"><span class="glyphicon glyphicon-chevron-right"></span> Nueva factura</a></li>
        <li onclick="$('#cuerpo').load('pages/default.php');"><a href="#fact_buscar"><span class="glyphicon glyphicon-chevron-right"></span> Buscar facturas</a></li>              
      </ul>
    </div>
  </div>
 <div class="col-md-10"> 
   <div class="container">
     <ul class="nav nav-pills pull-right">
       <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
       <li><a href="admin.php"><span class="glyphicon glyphicon-wrench"></span> Administración</a></li>
       <li><a href="login.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
     </ul>
   </div>

 <div class="row" id="main-box">
  <!-- divs se cierran en footer -->