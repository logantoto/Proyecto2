<!DOCTYPE html>
<html>
  <head>
    <title>
      Estudiantes
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
      .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 200% 50%;
    background-image: url('http://p1.pichost.me/i/36/1593289.jpg');
  }
      body {
        padding-top: 20px;
        font-size: 16px;
        font-family: "Open Sans",serif;
        background: transparent;
      }      
      
      .margin-base-vertical {
        font-family: "Open Sans",serif;
        margin: 10px 0;
        text-align: left;
      }
      #t{
        text-align: center;
      }
      
    </style>
    
  </head>
  <body>
    <div id="fullscreen_bg" class="fullscreen_bg">
    
    <div class="container">
      <H1 id="t" class="margin-base-vertical">ESTUDIANTES DE LA UNIVERSIDAD TECNICA NACIONAL</H1>
      <?php
        foreach ($data as $row) {            

            echo '     <div class="row"> ';
             echo '     <h4></h4> ';
            echo '        <div class="col-md-6 col-md-offset-3 panel panel-default"> ';
            echo '          <div class="media"> ';
            echo                  '<div class="btn-group pull-right">';
            echo '                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">';
            echo '                    Configuraci&#243;n ';
            echo '                    <span class="icon-cog icon-white"></span><span class="caret"></span>';
            echo '                </a>';
            echo '                <ul class="dropdown-menu">';
            echo '                    <li><a href="' . base_url() . 'estudiante/Editar/' . $row['Id'] . '"><span class="icon-wrench"></span> Editar</a></li>';
            echo '                    <li><a href="' . base_url() . 'estudiante/Eliminar/' . $row['Id'] . '"><span class="icon-trash"></span> Eliminar</a></li>';
            echo '                </ul>';
            echo '            </div>';
            echo '            <div class="media-body"> ';
            echo '                <h4 class="margin-base-vertical">'."Correo: " . $row['Correo'] . ' <small> ' . '</small></h4> '. '</span> ';
            echo '                <h4 class="margin-base-vertical">'."Nombre del Profesor: ". $row['Nombre_Completo'] .'</h4> ';
            echo '                <h4 class="margin-base-vertical">'."Cedula: " . $row['Cedula'] . '</h4> ';
            echo '                <h4 class="margin-base-vertical">' ."Contrasena: ". $row['Contrasena'] . '</h4> ';
            echo '            </div>';
            echo '          </div>';
            echo '        </div>';
            echo '        <!-- //main content -->';
            echo '      </div>';           
        }
      ?>

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
  </body>
</html>