<?php
require_once('views/CategoriasView.php');
require_once('models/ProductosModel.php');
require_once('models/CategoriasModel.php');

class CategoriasController
{
  private $vista;
  private $pmodelo;
  private $cmodelo;

  function __construct() {
    $this->pmodelo = new ProductosModel();
    $this->cmodelo = new CategoriasModel();
    $this->vista = new CategoriasView();
  }

    function cargarabm() {
      $productos = $this->pmodelo->getProductos();
      $categorias = $this->cmodelo->getCategorias();
      $this->vista->mostrarabm($productos, $categorias);
    }

    function filtraCategoria() {
      $id_categoria = $_POST['id_categoria'];
      $productos = $this->pmodelo->getProductosIdCat($id_categoria);
      $categorias = $this->cmodelo->getCategorias();
      $this->vista->mostrarCatId($productos,$categorias);
    }

    function guardarCategoria() {
      $categoria = $_POST;
      $this->cmodelo->addCategoria($categoria);
      $this->cargarabm();
    }

    function editarCategoria() {
      if(!empty($_POST['nombre'])) {

        $id_categoria = $_POST['id_categoria'];
        $nombre = $_POST['nombre'];
        $this->cmodelo->editarCategoria($id_categoria,$nombre);
        }
      $this->cargarabm();
    }

    function eliminarCategoria() {
      $id_categoria = $_GET['id_categoria'];
      $this->cmodelo->eliminarCategoria($id_categoria);
      $this->cargarabm();
    }
}
 ?>
