<?php
require('controllers/ProductosController.php');
require('controllers/CategoriasController.php');
require('controllers/TandiliaController.php');
require('controllers/LoginController.php');
require ('config/ConfigApp.php');

$productoscontroller = new ProductosController();
$categoriascontroller = new CategoriasController();
$tandiliacontroller = new TandiliaController();
$logincontroller = new LoginController();


if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $tandiliacontroller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_INICIAR:
    $tandiliacontroller->iniciar();
    break;
  case ConfigApp::$ACTION_LOGIN:
    $logincontroller->login();
    break;
    case ConfigApp::$ACTION_LOGOUT:
      $logincontroller->logout();
      break;
  case ConfigApp::$ACTION_GUARDAR_PRODUCTO:
    $productoscontroller->guardar();
    break;
  case ConfigApp::$ACTION_ELIMINAR_PRODUCTO:
    $productoscontroller->eliminar();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PRODUCTOS:
    $productoscontroller->mostrarproductos();
    break;
  case ConfigApp::$ACTION_CARGAR_ABM:
    $tandiliacontroller->cargarabm();
    break;
  case ConfigApp::$ACTION_CARGAR_TABLA_VENTAS:
    $tandiliacontroller->muestraTablaVentas();
    break;
  case ConfigApp::$ACTION_GUARDAR_CATEGORIA:
    $categoriascontroller->guardarCategoria();
      break;
  case ConfigApp::$ACTION_ELIMINAR_CATEGORIA:
    $categoriascontroller->eliminarCategoria();
      break;
  case ConfigApp::$ACTION_EDITAR_PRODUCTO:
    $productoscontroller->editarProducto();
      break;
  case ConfigApp::$ACTION_EDITAR_CATEGORIA:
    $categoriascontroller->editarCategoria();
      break;
  case ConfigApp::$ACTION_FILTRA_CATEGORIA:
    $categoriascontroller->filtraCategoria();
      break;
  default:
    $tandiliacontroller->iniciar();
    break;
}


?>
