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

  function mostrarMensaje($mensaje, $tipo){
      $this->smarty->assign('mensaje',$mensaje);
      $this->smarty->assign('tipoMensaje',$tipo);
    }

  function guardar(){
      $producto = $_POST['producto'];
      $this->modelo->crearProducto($producto);
      $this->vista->mostrarMensaje("La tarea se creo con imagen y todo!", "success");

      $this->mostrarproductos();
    }

}
 ?>
