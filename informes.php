<?php
require "recursos/zhi/auth.php";
?>	
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Sistema de Control de Horas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="recursos/bootstrap3/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Bootstrap FileUload-->
    <link href="recursos/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">        
    <!-- Jquery-ui -->
    <link href="recursos/jquery-ui/css/zhi/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
    <!-- Zhi CSS -->
    <link href="recursos/zhi/css/zhi.css" rel="stylesheet"> 
    <!-- Fonts -->
    <link href='fonts/fonts.css' rel='stylesheet' type='text/css'>
    <!-- Fav Icon -->    
    <link href="img/favicon.ico" rel="SHORTCUT ICON">



  </head>
  <body>
	<?php 
	include('header.php');
	include('sidebar_informes.php');
	?>

	<div id="cuerpo">

   <?php 
		
   include('pages_informes/default.php'); 
   ?>

	</div>

	<?php
	include('footer.php');
	?>

<iframe name="IframeOutput" class="hide"></iframe>

 <!-- javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="recursos/jquery/jquery-1.10.2.min.js"></script>    
  <script src="recursos/bootstrap3/js/bootstrap.min.js"></script>
  <script src="recursos/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>  
  <script src="recursos/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"></script>
  
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