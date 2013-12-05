<!DOCTYPE html>
<html>
  <head>
    <title>
      Ingresar 
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
    background-image: url('http://www.fondosni.com/images/wallpapers/windows-7-wallpaper-16-88933.jpg');
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
      <div class="row">
        <div class="col-md-6 col-md-offset-3 panel panel-default">
          
          <h1 class="margin-base-vertical">
            Editar Aula
          </h1>
          
          <form class="form-horizontal" action="<?php echo base_url();?>aula/EditarAula" method="Post">

            <fie1ldset>
              <input type="hidden" name='id' value="<?php echo $data->Id; ?>" >

              <!-- Address form -->
              
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Numero de Aula
                </label>
                <div class="controls">
                  <input id="numero_aula" name="numero_aula" type="text" placeholder="numero_aula" class="input-xlarge" value="<?php echo $data->Numero_Aula; ?>">
                  <p class="help-block">  
                  </p>
                </div>
              </div>
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Nombre 
                </label>
                <div class="controls">
                  <input id="nombre" name="nombre" type="text" placeholder="Nombre"
                  class="input-xlarge" value="<?php echo $data->Nombre;?>">
                  <p class="help-block">
                  </p>
                </div>
              </div>
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Ubicacion
                </label>
                <div class="controls">
                  <input id="ubicacion" name="ubicacion" type="text" placeholder="ubicacion"
                  class="input-xlarge" value="<?php echo $data->Ubicacion; ?>">
                  <p class="help-block">
                  
                  </p>
                </div>
              </div>
              <!-- address-line1 input-->
                  
                         
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
    
    <!-- //container -->
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>

    <script type="text/javascript">

      $(function() {

          $('#pais').val("<?php echo $data->Pais; ?>")
      });

      

    </script>
  </body>
</html>