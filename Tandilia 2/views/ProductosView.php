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

  function mostrarproductos($productos){
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('productosprueba.tpl');
  }

  function mostrarproductoslista($productos){
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('productoslista.tpl');
  }

}
 ?>
