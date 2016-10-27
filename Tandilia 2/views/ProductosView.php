<?php
//require('libs/Smarty.class.php');
require_once('libs/Smarty.class.php');

class ProductosView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  //function mostrar(){
//    $this->smarty->display('index.tpl');
  //}//tandilia

  function mostrarproductos($productos) {
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('productos.tpl');
  }//producto

//  function mostrarTablaVentas($productos) {
  //  $this->smarty->assign('productos',$productos);
//    $this->smarty->display('venta.tpl');
//  }//tandilia



  function mostrarabm($productos, $categorias){
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('abm.tpl');
  }//todos


  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }//producto
}
 ?>
