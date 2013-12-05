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
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">http://www.fondosypantallas.com/wp-content/uploads/2013/03/rainbow_colored_windows_7.jpg
</script>
<![endif]-->
    
    <style>
      
     
    
.btn3d {
    transition:all .08s linear;
    position:relative;
    outline:medium none;
    -moz-outline-style:none;
    border:0px;
    margin-right:10px;
    margin-top:15px;
}
.fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 200% 50%;
    background-image: url('http://www.fondosypantallas.com/wp-content/uploads/2013/03/rainbow_colored_windows_7.jpg');
  }
.btn3d:focus {
    outline:medium none;
    -moz-outline-style:none;
}
.btn3d:active {
    top:9px;
}
.btn-ADMIN {
    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #adadad, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#fff;
}
.btn-PROFESORES {
    box-shadow:0 0 0 1px #A0B943 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #A0B943, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#A0B943;
}
 .btn-ESTUDIANTES {
    box-shadow:0 0 0 1px #5cb85c inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #4cae4c, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#5cb85c;
}
 .btn-AULAS {
    box-shadow:0 0 0 1px #8D4D78 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #8D4D78, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#8D4D78;
}
.btn-CURSOS {
    box-shadow:0 0 0 1px #f0ad4e inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #eea236, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#f0ad4e;
}
.btn-GRUPOS {
    box-shadow:0 0 0 1px #c63702 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #C24032, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#c63702;
}
.btn-CARRERAS {
    box-shadow:0 0 0 1px #D1CF1A inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #D1CF1A, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#D1CF1A;
}
#t{
 
color: #DBF479; 

}
</style>
    
  </head>
<body>
	<div id="fullscreen_bg" class="fullscreen_bg">
<div class="container">
	<div class="row">
		<h2 id="t">UNIVERSIDAD TECNICA NACIONAL</h2>
        <!-- Standard button -->
        <button type="button" class="btn3d btn btn-ADMIN btn-lg"><span class="glyphicon glyphicon-user"></span><a href="http://localhost/UTN/index.php/Admin/index">ADMIN</a></button>
        
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" onclick = "localhost/UTN/index.php/Profesor/Crear" class="btn btn-PROFESORES btn-lg btn3d"><span class="glyphicon glyphicon-user"></span><a href="http://localhost/UTN/index.php/Profesor/index"> PROFESORES</a></button>
      
        <!-- Indicates a successful or positive action -->
        <button type="button" class="btn btn-ESTUDIANTES btn-lg btn3d"><span class="glyphicon glyphicon-user"><a href="http://localhost/UTN/index.php/Estudiante/index"></span> ESTUDIANTES</a></button>
        
        <!-- Contextual button for informational alert messages -->
        <button type="button" class="btn btn-AULAS btn-lg btn3d"><span class="glyphicon glyphicon-briefcase"><a href="http://localhost/UTN/index.php/Aula/index"></span> AULAS</a></button>
        
        <!-- Indicates caution should be taken with this action -->
        <button type="button" class="btn btn-CURSOS btn-lg btn3d"><span class="glyphicon glyphicon-briefcase"></span> CURSOS</button>
        
        <!-- Indicates a dangerous or potentially negative action -->
        <button type="button" class="btn btn-GRUPOS btn-lg btn3d"><span class="glyphicon glyphicon-briefcase"></span> GRUPOS</button>
        
        <!-- Indicates a dangerous or potentially negative action -->
        <button type="button" class="btn btn-CARRERAS btn-lg btn3d"><span class="glyphicon glyphicon-briefcase"><a href="http://localhost/UTN/index.php/Carrera/index"></span> CARRERAS</a></button>
        
	</div>
</div>
</div>
</body>

</html> 