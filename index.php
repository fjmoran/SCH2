<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Control de Horas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="recursos/bootstrap3/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="recursos/datepicker/css/datepicker.css" rel="stylesheet"> 
    <link href="recursos/zhi/css/zhi.css" rel="stylesheet"> 
    <link href="img/favicon.ico" rel="SHORTCUT ICON">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>

  </head>
  <body>
	<?php 
	include('header.php');
	include('sidebar.php');
	?>

	<div id="cuerpo">

   <?php include('pages/default.php'); ?>

	</div>
	<?php
	include('footer.php');
	?>

 <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="recursos/jquery/jquery-1.10.1.min.js"></script>    
    <script src="recursos/bootstrap3/js/bootstrap.min.js"></script>
    <script src="recursos/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="recursos/datepicker/js/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
    
    <script type="text/javascript"> 
      
      $(document).ready(function(){
        
        /* Menu activo */
        $('ul.bs-sidenav > li').click(function (e) {
           // e.preventDefault();
            $('ul.bs-sidenav > li').removeClass('active');
            $(this).addClass('active');                
        });  

      })

    </script>

 </body>
</html>