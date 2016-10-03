<?php
require('libs/Smarty.class.php');

class ProductosView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar($productos){
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('index.tpl');
  }

}
 ?>
