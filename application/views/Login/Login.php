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
      
        body {
          
    padding-top: 15px;
    font-size: 12px
  }
 .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 200% 50%;
    background-image: url('http://www.sowaar.com/wp-content/themes/photoblog/scripts/timthumb.php?src=http://www.sowaar.com/wallpapers/background/windows_7_wallpapers/windows_7_wallpaper%20(101).jpg&h=768&w=1024');
  }
  .main {
    max-width: 320px;
    margin: 0 auto;
  }
  .login-or {
    position: relative;
    font-size: 18px;
    color: #aaa;
    margin-top: 10px;
            margin-bottom: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fff;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  h3 {
color: 000099;
    text-align: left;
    line-height: 200%;
  }
  .btn-primary1 {
    box-shadow:0 0 0 1px #F7FAFA inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #F7FAFA, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#F7FAFA;
}


    </style>
    
  </head>
  <body >
<div id="fullscreen_bg" class="fullscreen_bg">
    <div class="container">
  <div class="row">

    <div class="main">

      <h3> Sign Up</h3>
       <p>
          <button type="button" class="btn btn-primary1 btn-xs btn3d"><a href="http://localhost/UTN/index.php/Admin/crear">Admin</a></button>

          <button type="button" class="btn btn-primary1 btn-xs btn3d"><a href="http://localhost/UTN/index.php/Profesor/crear">Profesor</a></button>
          
          <button type="button" class="btn btn-primary1 btn-xs btn3d"><a href="http://localhost/UTN/index.php/Estudiante/crear">Estudiante</a></button>
        </p>
        <h3></h3>
      <div class="row">
        <div  class="col-xs-15 col-sm-15 col-md-15">
          <a href="#" class="btn btn-lg btn-primary btn-block">UNIVERSIDAD TECNICA NACIONAL</a>
        </div>
      </div>
      <form role="form" action="<?php echo base_url();?>login/index" method="Post">
        <div class="form-group">
          <label for="inputUsernameEmail">Admin</label>
          <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        <div class="form-group">
          
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" id="clave" name="clave">
        </div>
       
        <button type="submit" class="btn btn btn-primary">
          Log In
        </button>
      </form>
    
    </div>
    
  </div>
</div>
</div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>
  </body>
</html>