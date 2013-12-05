<!DOCTYPE html>
<html>
  <head>
    <title>
      Ingresar Profesores
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
    
    <style>
      
      /* http://css-tricks.com/perfect-full-page-background-image/ */
      html {
        /* background: url(img/6133364748_89f2365922_o.jpg) no-repeat center center fixed;
        */
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      
      body {
        padding-top: 20px;
        font-size: 16px;
        font-family: "Open Sans",serif;
        background: transparent;
      }
      
      h1 {
        font-family: "Abel", Arial, sans-serif;
        font-weight: 400;
        font-size: 40px;
      }
      
      /* Override B3 .panel adding a subtly transparent background */
      .panel {
         background-color: 66FF00;
        background-color: rgba(255, 255, 255, 0.9);
      }
       .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-image: url('http://www.fondos-hd.com/user-content/uploads/wall/o/29/25.jpg');
  }
       #t{
        text-align: center;
      }
      .margin-base-vertical {
        margin: 40px 0;
        text-align: center;
      }
      
    </style>
    
  </head>
  <body>
    <div id="fullscreen_bg" class="fullscreen_bg">
    <div class="container">
      <H1 id="t" class="margin-base-vertical"> UNIVERSIDAD TECNICA NACIONAL</H1>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 panel panel-default">
          
          <h1 class="margin-base-vertical">
            Registrar Profesor!!
          </h1>
          
          <form class="form-horizontal" action="<?php echo base_url();?>login" method="Post">
            <fie1ldset>
              <!-- Address form -->
              
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Correo
                </label>
                <div class="controls">
                  <input id="correo" name="correo" type="text" placeholder="Correo" class="input-xlarge">
                  <p class="help-block"> @.com
                  </p>
                </div>
              </div>
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Nombre completo
                </label>
                <div class="controls">
                  <input id="nombre_completo" name="nombre_completo" type="text" placeholder="Nombre completo"
                  class="input-xlarge">
                  <p class="help-block">
                  </p>
                </div>
              </div>
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Cedula
                </label>
                <div class="controls">
                  <input id="cedula" name="cedula" type="text" placeholder="Cedula"
                  class="input-xlarge">
                  <p class="help-block">
                   
                  </p>
                </div>
              </div>
              <!-- region input-->
              <div class="control-group">
                <label class="control-label">
                  Contrasena
                </label>
                <div class="controls">
                  <input id="contrasena" name="contrasena" type="password" placeholder="Contrasena"
                  class="input-xlarge">
                  <p class="help-block">
                  </p>
                </div>
              </div>              
              <!-- country select -->
              
              
                  </fieldset>
                  <br>
                  <p class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">
                      Guardar
                    </button>
                  </p>
              </form>
              
              
          </div>
          <!-- //main content -->
      </div>
      <!-- //row -->
    </div>
  </div>
    <!-- //container -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>
  </body>
</html>