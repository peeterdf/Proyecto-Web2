<?php
require_once('views/ProductosView.php');
require_once('models/ProductosModel.php');
require_once('models/CategoriasModel.php');
require_once('models/ComentarioModel.php');

class ProductosController
{
  private $vista;
  private $pmodelo;
  private $cmodelo;
  private $comentmodel;

  function __construct(){
    $this->pmodelo = new ProductosModel();
    $this->cmodelo = new CategoriasModel();
    $this->vista = new ProductosView();
    $this->comentmodel = new ComentarioModel();
  }

  function mostrarproductos(){
    $productos = $this->pmodelo->getProductos();
    $categorias = $this->cmodelo->getCategorias();
    $this->vista->mostrarproductos($productos, $categorias);
  }

  function ampliarproducto(){
    session_start();
    if( isset($_SESSION['user'])){
    $usuario=$_SESSION;}else {
      $usuario=null;
    }
    $id_producto = $_GET['id_producto'];
    $producto = $this->pmodelo->getProducto($id_producto);
    $this->vista->mostrarproducto($producto,$usuario);
  }

  function getImagenesVerificadas($imagenes){
    $imagenesVerificadas = [];
    for ($i=0; $i < count($imagenes['size']); $i++) {
      if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
          $imagen_aux = [];
          $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
          $imagen_aux['name']=$imagenes['name'][$i];
          $imagenesVerificadas[]=$imagen_aux;
      }
    }

    return $imagenesVerificadas;
  }

  function guardar() {
      $producto = $_POST;
      if(isset($_FILES['imagenes'])){
        $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
      if(count($imagenesVerificadas)>0){
        $this->pmodelo->addProducto($producto,$imagenesVerificadas);
      }else{
        $this->vista->mostrarMensaje("Error con las imagenes", "danger");
      }
    }  else{
        $this->vista->mostrarMensaje("La imagen es requerida","danger");
    }
  $this->cargarabm();
  }

    function cargarabm(){
      $productos = $this->pmodelo->getProductos();
      $categorias = $this->cmodelo->getCategorias();
      $this->vista->mostrarabm($productos, $categorias);
    }

  function cargarComentarios(){
    $comentarios= $this->comentmodel->getComentarios();
    $this->vista->mostrarabmcomentario($comentarios);
  }

    function editarProducto(){
      if(!empty($_POST['precio_min']) && !empty($_POST['precio_may'])) {

        $id_producto = $_POST['id_producto'];
        $precio_min = $_POST['precio_min'];
        $precio_may = $_POST['precio_may'];
        $descripcion=$_POST['descripcion'];
        $categoria=$_POST['fk_id_categoria'];
        $this->pmodelo->editarProducto($id_producto,$precio_may,$precio_min,$descripcion,$categoria);
        }
      $this->cargarabm();
    }

    function eliminar(){
    $id_producto = $_GET['id_producto'];
    $this->pmodelo->eliminarProducto($id_producto);
    $this->cargarabm();
  }

  function mostrarImg(){
  $id_producto = $_POST['id_producto'];
  $imagenes = $this->pmodelo->getImagenes($id_producto);
  $this->vista->mostrarImg($imagenes);
}

function agregarImagenes(){
  $id_producto = $_POST['id_producto'];
  if(isset($_FILES['imagenes'])){
    $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
    if(count($imagenesVerificadas)>0){
      $this->pmodelo->cargaImg($id_producto,$imagenesVerificadas);
    }
  }
  $this->cargarabm();
}

function eliminarImagen(){
  $id_imagen = $_GET['id_imagen'];
  $this->pmodelo->eliminarImagen($id_imagen);
  $this->cargarabm();

  }

  function eliminarComentario(){
    $id_comentario = $_GET['id_comentario'];
    $this->comentmodel->eliminarComentario($id_comentario);
    $this->cargarComentarios();
    }
}
 ?>
