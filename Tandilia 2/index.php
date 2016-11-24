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

session_start();
$logueado = isset($_SESSION["user"]);
$admin = isset($_SESSION["permiso"]);
switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_INICIAR:

    $tandiliacontroller->iniciar();
    break;
  case ConfigApp::$ACTION_LOGIN:
    $logincontroller->login();
    break;
  case ConfigApp::$ACTION_REGISTRAR:
    if (!$logueado)
      $logincontroller->registrar_usuario();
    break;
  case ConfigApp::$ACTION_LOGOUT:
    if ($logueado) $logincontroller->logout();
    break;
  case ConfigApp::$ACTION_GUARDAR_PRODUCTO:
 if (($logueado)&&($admin))     $productoscontroller->guardar();
    break;
  case ConfigApp::$ACTION_ELIMINAR_PRODUCTO:
  if (($logueado)&&($admin))    $productoscontroller->eliminar();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PRODUCTOS:
    $productoscontroller->mostrarproductos();
    break;
  case ConfigApp::$ACTION_AMPLIAR_PRODUCTO:
    $productoscontroller->ampliarproducto();
    break;
  case ConfigApp::$ACTION_CARGAR_ABM:
  if (($logueado)&&($admin))   $tandiliacontroller->cargarabm();
    break;
  case ConfigApp::$ACTION_CARGAR_TABLA_VENTAS:
    $tandiliacontroller->muestraTablaVentas();
    break;
  case ConfigApp::$ACTION_GUARDAR_CATEGORIA:
    if (($logueado)&&($admin))  $categoriascontroller->guardarCategoria();
      break;
  case ConfigApp::$ACTION_ELIMINAR_CATEGORIA:
  if (($logueado)&&($admin))    $categoriascontroller->eliminarCategoria();
      break;
  case ConfigApp::$ACTION_EDITAR_PRODUCTO:
  if (($logueado)&&($admin))     $productoscontroller->editarProducto();
      break;
  case ConfigApp::$ACTION_EDITAR_CATEGORIA:
  if (($logueado)&&($admin))   $categoriascontroller->editarCategoria();
      break;
  case ConfigApp::$ACTION_FILTRA_CATEGORIA:
    $categoriascontroller->filtraCategoria();
      break;
  case ConfigApp::$ACTION_GUARDAR_CONSULTA:
    $contactocontroller->guardarConsulta();
      break;
  case ConfigApp::$ACTION_ADMIN_USUARIOS:
    if (($logueado)&&($admin))  $logincontroller->cargarUsuarios();
      break;
  case ConfigApp::$ACTION_ELIMINAR_USUARIO:
  if (($logueado)&&($admin))   $logincontroller->eliminarUsuario();
      break;
  case ConfigApp::$ACTION_EDITAR_USUARIO:
  if (($logueado)&&($admin))   $logincontroller->editarPrivilegio();
      break;
  case ConfigApp::$ACTION_ADMIN_COMENTARIOS:
    if ($logueado)   $productoscontroller->cargarComentarios();
      break;
      case ConfigApp::$ACTION_ELIMINAR_COMENTARIO:
    if (($logueado)&&($admin))   $productoscontroller->eliminarComentario();
          break;
  case ConfigApp::$ACTION_AGREGAR_IMAGENES:
  if (($logueado)&&($admin))   $productoscontroller->agregarImagenes();
      break;
  case ConfigApp::$ACTION_ELIMINAR_IMAGEN:
  if (($logueado)&&($admin))  $productoscontroller->eliminarImagen();
      break;
  default:
    $tandiliacontroller->iniciar();
    break;
}


?>
