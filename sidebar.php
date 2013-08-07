 <div class="container-fluid">
 <div class="row-fluid">
 <div class="span2">
 <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Ingreso</li>
              <li onclick="$('#cuerpo').load('pages/ing_trabajos.php');"><a href="#trabajos"><i class="icon-chevron-right"></i> Trabajos</a></li>  <!-- Muestra menu activo-->
              <li onclick="$('#cuerpo').load('pages/ing_gastos.php');"><a href="#gastos"><i class="icon-chevron-right"></i> Gastos</a></li>
              <li><a href="index.php?pid=3"><i class="icon-chevron-right"></i> Abonos</a></li>
              <li class="nav-header">Informes</li>
              <li><a href="index.php?pid=4"><i class="icon-chevron-right"></i>  Horas cliente</a></li>
              <li><a href="index.php?pid=5"><i class="icon-chevron-right"></i> Horas abogado</a></li>
              <li><a href="index.php?pid=6"><i class="icon-chevron-right"></i> Gastos cliente</a></li>
              <li><a href="index.php?pid=7"><i class="icon-chevron-right"></i> Gastos abogado</a></li>
              <li><a href="index.php?pid=8"><i class="icon-chevron-right"></i> Consolidado de horas</a></li>
              <li class="<?php echo ($_GET['pid']==9) ? 'active':''; ?>"><a href="index.php?pid=9"><i class="icon-chevron-right"></i> Personal</a></li>
              <li class="<?php echo ($_GET['pid']==10) ? 'active':''; ?>"><a href="index.php?pid=10"><i class="icon-chevron-right"></i> Horas materia</a></li>  
              <li class="nav-header">Clientes</li>
              <li class="<?php echo ($_GET['pid']==11) ? 'active':''; ?>"><a href="index.php?pid=11" class="load_link"><i class="icon-chevron-right"></i> Buscar</a></li>
              <li class="<?php echo ($_GET['pid']==12) ? 'active':''; ?>"><a href="index.php?pid=12" class="load_link"><i class="icon-chevron-right"></i> Crear</a></li>
              <li class="<?php echo ($_GET['pid']==13) ? 'active':''; ?>"><a href="index.php?pid=13"><i class="icon-chevron-right"></i> Agregar contacto</a></li>                          
              <li class="nav-header">Contactos</li>
              <li class="<?php echo ($_GET['pid']==14) ? 'active':''; ?>"><a href="index.php?pid=14"><i class="icon-chevron-right"></i> Buscar</a></li>
              <li class="<?php echo ($_GET['pid']==15) ? 'active':''; ?>"><a href="index.php?pid=15"><i class="icon-chevron-right"></i> Crear</a></li>
              <li class="nav-header">Facturación</li>
              <li class="<?php echo ($_GET['pid']==16) ? 'active':''; ?>"><a href="index.php?pid=16"><i class="icon-chevron-right"></i> Nueva factura</a></li>
              <li class="<?php echo ($_GET['pid']==17) ? 'active':''; ?>"><a href="index.php?pid=17"><i class="icon-chevron-right"></i> Buscar facturas</a></li>              
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