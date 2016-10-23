<?php
/* Smarty version 3.1.30, created on 2016-10-22 23:00:45
  from "C:\xampp\htdocs\proyectos\Proyecto-Web2\Tandilia 2\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580bd37d8e23f6_90431907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f46e67f6fff20cbc89756e97c8c85d5cdacc34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto-Web2\\Tandilia 2\\templates\\header.tpl',
      1 => 1477013405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580bd37d8e23f6_90431907 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
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
                  <li class="index"><a href="#">Home</a></li>
                  <li class="nosotros"><a href="#">Nosotros <span class="sr-only">(current)</span></a></li>
                  <li class="contacto"><a href="#">Contacto</a></li>
                  <li class="venta"><a href="#">Venta</a></li>
                  <li class="productos"><a href="#">Productos</a></li>
                  <li class="abm"><a href="#">ABM</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  </div>
<?php }
}
