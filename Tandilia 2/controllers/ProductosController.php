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

  function guardar(){
      $producto = $_POST;
      $this->modelo->addProducto($producto);
      $productos = $this->modelo->getProductos();
      $this->vista->mostrarproductoslista($productos);
    }

}
 ?>
