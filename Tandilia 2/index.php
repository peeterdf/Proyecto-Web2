<?php
require('controllers/ProductosController.php');
require ('config/ConfigApp.php');

$controller = new ProductosController();


if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_INICIAR:
    $controller->iniciar();
    break;
  case ConfigApp::$ACTION_GUARDAR_PRODUCTO:
    $controller->guardar();
    break;
  case ConfigApp::$ACTION_ELIMINAR_PRODUCTO:
    $controller->eliminar();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PRODUCTOS:
    $controller->mostrarproductos();
    break;
  default:
    $controller->iniciar();
    break;
}


?>
