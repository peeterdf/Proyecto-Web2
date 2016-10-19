<?php
require('libs/Smarty.class.php');

class ProductosView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar(){
    $this->smarty->display('index.tpl');
  }

  function mostrarproductos($productos) {
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('productos.tpl');
  }

  function mostrarTablaVentas($productos) {
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('venta.tpl');
  }

  function mostrarproductoslista($productos)  {
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('productoslista.tpl');
  }

  function mostrarabm($productos, $categorias){
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('abm.tpl');
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }
}
 ?>
