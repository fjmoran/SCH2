<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Control de Horas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="recursos/bootstrap3/css/bootstrap.css" rel="stylesheet" media="screen">
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

      /* First level of nav */
      .bs-sidenav {
        margin-bottom: 30px;
        padding-top:    10px;
        padding-bottom: 10px;
        text-shadow: 0 1px 0 #fff;
        background-color: #f8f8f8;
        border-radius: 5px;
      }

      /* All levels of nav */
      .bs-sidebar .nav > li > a {
        display: block;
        color: #716b7a;
        padding: 5px 20px;
      }
      .bs-sidebar .nav > li > a:hover,
      .bs-sidebar .nav > li > a:focus {
        text-decoration: none;
        background-color: #e5e3e9;
        border-right: 1px solid #dbd8e0;
      }
      .bs-sidebar .nav > .active > a,
      .bs-sidebar .nav > .active:hover > a,
      .bs-sidebar .nav > .active:focus > a {
        font-weight: bold;
        color: #563d7c;
        background-color: transparent;
        border-right: 1px solid #563d7c;
      }

      /* Nav: second level (shown on .active) */
      .bs-sidebar .nav .nav {
        display: none; /* Hide by default, but at >768px, show it */
        margin-bottom: 8px;
      }
      .bs-sidebar .nav .nav > li > a {
        padding-top:    3px;
        padding-bottom: 3px;
        padding-left: 30px;
        font-size: 90%;
      }   

      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        max-width: none !important;
        width: auto;
      }
      .container .credit {
        margin: 20px 0;
      }
</style>
  </head>
  <body>
	<?php 
	include('header.php');
	include('sidebar_admin.php');
	?>

  <div id="cuerpo">
    
  <?php include('pages_admin/default.php'); ?>

  </div>
	<?php
	include('footer.php');
	?>

 <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="recursos/jquery/jquery-1.10.1.min.js"></script>    
    <script src="recursos/bootstrap3/js/bootstrap.js"></script>
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