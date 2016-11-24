<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cervecería - Tandilia</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <header>
        <img class="center-block img-responsive" src="./images/logo.png" alt="Logo" />
    </header>
    <div class="alto50">
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="100" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Tandilia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="index"><a href="">Home</a></li>
                  <li class="nosotros"><a href="">Nosotros <span class="sr-only">(current)</span></a></li>
                  <li class="contacto"><a href="">Contacto</a></li>
                  <li class="venta"><a href="">Venta</a></li>
                  <li class="productos"><a href="">Productos</a></li>

                  {if ($permiso==1)}

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar <span class="caret"></span></a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item adminUsers" href="#">Usuarios</a></li>
                    <li><a class="dropdown-item adminCometarios" href="#">comentarios</a></li>
                    <li><a class="dropdown-item adminItems" href="#">Items</a></li>
                  </ul>
                </li>
                {/if}
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  {if (!$nombre=="")}
                <li><a href="">Bienvenido {$nombre}</a></li>
                <li class="logout"><a>Salir</a></li>
                {else}
                  <li class="login"><a>Sesión</a></li>
                  <li class="register"><a >Registro</a></li>
                {/if}
                </ul>





            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  </div>
