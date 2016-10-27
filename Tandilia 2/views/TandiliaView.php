<?php
//require('libs/Smarty.class.php');
require_once('libs/Smarty.class.php');

class TandiliaView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar(){
    $this->smarty->display('index.tpl');
  }//tandilia



  function mostrarTablaVentas($productos) {
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('venta.tpl');
  }//tandilia



  function mostrarabm($productos, $categorias){
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('abm.tpl');
  }//todos



}
 ?>
