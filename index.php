<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Control de Horas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="recursos/bootstrap/assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="recursos/datepicker/css/datepicker.css" rel="stylesheet"> 
    <link href="img/favicon.ico" rel="SHORTCUT ICON">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>

<style type="text/css">    

      /* Sticky footer styles
      -------------------------------------------------- */
      
      h2 { font-family: 'Ubuntu Condensed', sans-serif !important; font-weight: 400; }

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }
</style>
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
    <script src="recursos/bootstrap/assets/js/bootstrap.js"></script>
    <script src="recursos/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="recursos/datepicker/js/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
    
    <script type="text/javascript"> 
      
      $(document).ready(function(){
        
        /* Menu activo */
        $('ul.nav-list > li').click(function (e) {
           // e.preventDefault();
            $('ul.nav-list > li').removeClass('active');
            $(this).addClass('active');                
        });  

      })

    </script>

 </body>
</html>