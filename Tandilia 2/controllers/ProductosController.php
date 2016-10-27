<?php
require('views/ProductosView.php');
require('models/ProductosModel.php');

class ProductosController
{
  private $vista;
  private $modelo;

  function __construct(){
    $this->modelo = new ProductosModel();
    $this->vista = new ProductosView();
  }

  function iniciar(){
    $this->vista->mostrar();
  }

  function mostrarproductos(){
    $productos = $this->modelo->getProductos();
    $this->vista->mostrarproductos($productos);
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
        $this->modelo->addProducto($producto,$imagenesVerificadas);
      }else{
        $this->vista->mostrarMensaje("Error con las imagenes", "danger");
      }
    }  else{
        $this->vista->mostrarMensaje("La imagen es requerida","danger");
    }
  $this->cargarabm();
  }

  function cargartabla(){
    $productos = $this->modelo->getProductos();
    $categorias = $this->modelo->getCategorias();
    $this->vista->getTabla($productos, $categorias);
  }


    function cargarabm(){
      $productos = $this->modelo->getProductos();
      $categorias = $this->modelo->getCategorias();
      $this->vista->mostrarabm($productos, $categorias);
    }

    function muestraTablaVentas(){
      $productos = $this->modelo->getProductos();
      $this->vista->mostrarTablaVentas($productos);
    }

    function editarProducto(){
      if(!empty($_POST['precio_min']) && !empty($_POST['precio_may'])) {

        $id_producto = $_POST['id_producto'];
        $precio_min = $_POST['precio_min'];
        $precio_may = $_POST['precio_may'];
        $descripcion=$_POST['descripcion'];
        $categoria=$_POST['fk_id_categoria'];
        $this->modelo->editarProducto($id_producto,$precio_may,$precio_min,$descripcion,$categoria);
        }
      $this->cargarabm();
    }

    function guardarCategoria() {
      $categoria = $_POST;
      $this->modelo->addCategoria($categoria);
      $this->cargarabm();
    }

    function editarCategoria(){
      if(!empty($_POST['nombre'])) {

        $id_categoria = $_POST['id_categoria'];
        $nombre = $_POST['nombre'];
        $this->modelo->editarCategoria($id_categoria,$nombre);
        }
      $this->cargarabm();
    }

    function eliminarCategoria() {
      $id_categoria = $_GET['id_categoria'];
      $this->modelo->eliminarCategoria($id_categoria);
    }

    function eliminar(){
    $id_producto = $_GET['id_producto'];
    $this->modelo->eliminarProducto($id_producto);
    $this->cargarabm();
  }

}
 ?>
