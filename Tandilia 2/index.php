<?php
require_once('controllers/ProductosController.php');
require_once('controllers/CategoriasController.php');
require_once('controllers/TandiliaController.php');
require_once('controllers/LoginController.php');
require_once('controllers/ContactoController.php');
require_once('config/ConfigApp.php');

$productoscontroller = new ProductosController();
$categoriascontroller = new CategoriasController();
$tandiliacontroller = new TandiliaController();
$logincontroller = new LoginController();
$contactocontroller = new ContactoController();


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
  case ConfigApp::$ACTION_REGISTRAR:
    $logincontroller->registrar_usuario();
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
  case ConfigApp::$ACTION_AMPLIAR_PRODUCTO:
    $productoscontroller->ampliarproducto();
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
  case ConfigApp::$ACTION_GUARDAR_CONSULTA:
    $contactocontroller->guardarConsulta();
      break;
  case ConfigApp::$ACTION_ADMIN_USUARIOS:
    $logincontroller->cargarUsuarios();
      break;
  case ConfigApp::$ACTION_ELIMINAR_USUARIO:
    $logincontroller->eliminarUsuario();
      break;
  case ConfigApp::$ACTION_EDITAR_USUARIO:
    $logincontroller->editarPrivilegio();
      break;
  case ConfigApp::$ACTION_AGREGAR_IMAGENES:
    $productoscontroller->agregarImagenes();
      break;
  case ConfigApp::$ACTION_ELIMINAR_IMAGEN:
    $productoscontroller->eliminarImagen();
      break;      
  default:
    $tandiliacontroller->iniciar();
    break;
}


?>
