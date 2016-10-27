<?php
require_once('views/TandiliaView.php');
require_once('models/ProductosModel.php');
require_once('models/CategoriasModel.php');

class TandiliaController
{
  private $vista;
  private $pmodelo;
  private $cmodelo;

  function __construct(){
    $this->pmodelo = new ProductosModel();
    $this->cmodelo = new CategoriasModel();
    $this->vista = new TandiliaView();
  }

  function iniciar(){
    $this->vista->mostrar();
  }



    function cargarabm(){
      $productos = $this->pmodelo->getProductos();
      $categorias = $this->cmodelo->getCategorias();
      $this->vista->mostrarabm($productos, $categorias);
    }

    function muestraTablaVentas(){
      $productos = $this->pmodelo->getProductos();
      $this->vista->mostrarTablaVentas($productos);
    }


}
 ?>
