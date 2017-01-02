<!DOCTYPE html>	
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http equiv="Content-Type" content="text/html; charset=UTF-8" >
<title>HV Dany 1.0</title>
<head>

<link href='dist\logo.jpg' rel='icon' type='image/x-icon'/>
{!!Html::style('dist/css/bootstrap.min.css')!!}
<link href="login4.css" rel="stylesheet" type="text/css">
<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<!--social  !-->
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

	
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#acolapsar" >
<span class="sr-only"> toggle navigation</span>
<span class="icon-bar"></span><span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#" class="navbar-brand"><span class="glyphicon glyphicon-tasks"></span>Hoja de Vida</a>
</div>
<div class="collapse navbar-collapse" id="acolapsar">
<ul class="nav navbar-nav">
<li><a href="index.html" > <span class="glyphicon glyphicon-home"></span>Inicio</a></li>
<li><a href="sobremi.html" > <span class="glyphicon glyphicon-education"></span>Estudios</a></li>

<li><a href="Estudio.html" > <span class="glyphicon glyphicon-thumbs-up"></span>Inf. personal</a></li>
<li><a href="work.html" > <span class="glyphicon glyphicon-wrench"></span>Exp. Laboral</a></li>


</ul>


</div>
</div>
</nav>
<br>
<br>
@yield('content')

<div class="nuevo">

<footer class="clase-general" >

<section class="contin" id="footer-bottom">
<div class="container-inner">

  
            <a href="https://twitter.com/afbogota" class="btn azm-social azm-btn "><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="#" class="btn azm-social azm-btn "><i class="fa fa-yahoo"></i> Yahoo</a>
                                    <a href="#" class="btn azm-social azm-btn "><i class="fa fa-youtube"></i> YouTube</a>
                                                        <a href="#" class="btn azm-social azm-btn "><i class="fa fa-google"></i> Google</a>
                    <a href="#" class="btn azm-social azm-btn "><i class="fa fa-codepen"></i> CodePen</a>
                                <a href="https://twitter.com/afbogota" class="btn azm-social azm-btn "><i class="fa fa-facebook"></i>Facebook</a>



<div margin-left="69px" ><a href="http://localhost/hv/contactame.php" class=" btn-default" ><h6  >Desarrollo: Dany Noriega</h6> </a> </div>
    </div>

    </section>
</footer></div>
</body>
</html>