<?php
require('views/ProductosView.php');
require('models/ProductosModel.php');

class ProductosController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new ProductosModel();
    $this->vista = new ProductosView();
  }

  function iniciar(){
    $productos = $this->modelo->getProductos();
    $this->vista->mostrar($productos);
  }

  function mostrarproductos(){
    $productos = $this->modelo->getProductos();
    $this->vista->mostrarproductos($productos);
  }

}
 ?>
