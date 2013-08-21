
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Control de Horas - Ingreso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="recursos/bootstrap3/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>

    <link href="img/favicon.ico" rel="SHORTCUT ICON">

     <style type="text/css">

      h2 { font-family: 'Ubuntu Condensed', sans-serif !important; font-weight: 400; }
    
      body {
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style> 
  </head>

  <body>

    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
      <a class="navbar-brand pull-left" href="#">Sistema de Control de Horas</a>
      </div>
    </div><!--.navbar-->

    <div class="container">

      <form class="form-signin" name="login" action="index.php" method="post">
        <h2 class="form-signin-heading">Acceso</h2>
        <input type="text" class="form-control" placeholder="Usuario">
        <input type="password" class="form-control" placeholder="Contraseña">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
        <button class="btn btn-primary btn-block" type="submit">Ingresar</button><br>
        <a href="#recuperar" data-toggle="modal">Recuperar contraseña</a>
      </form>

    </div> <!-- /container -->

      <!-- Modal -->
      <div id="recuperar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="recuperarLabel" aria-hidden="true">
        
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">¿Olvidaste tu contraseña?</h4>
            </div>
            <div class="modal-body">
              <p>Ingresa tu correo electrónico para recuperarla</p>
              <input type="email" class="form-control" placeholder="correo@dominio.com">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Enviar</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="recursos/jquery/jquery-1.10.1.min.js"></script>    
    <script src="recursos/bootstrap3/js/bootstrap.min.js"></script>
  </body>
</html>
