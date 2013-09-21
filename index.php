<?php
require "recursos/zhi/auth.php";
?>	
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
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
	include('sidebar.php');
	?>

	<div id="cuerpo">

   <?php 
    echo "<div class='alert alert-danger alert-dismissable col-md-8'> <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
		echo "Flag de manejo de variables = ";
		echo count($_SESSION) ."</br>";
		echo "user = ".$_SESSION[userUsuario]."</br>";
		echo "nombre = ".$_SESSION[nombreUsuario]."</br>";
		echo "id = ".$_SESSION[idUsuario]."</br>";
		echo "idperfil = ".$_SESSION[idperfilUsuario]."</br>";
		echo "</div>";
		
   include('pages/default.php'); 
   ?>

	</div>

	<?php
	include('footer.php');
	?>

<iframe name="IframeOutput" style="display:none;"></iframe>

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
      /* Carousel init */
      $('.carousel').carousel({
        interval: 4500
      });

      $('.carousel').carousel('cycle');
 

    })
  </script>

 </body>
</html>