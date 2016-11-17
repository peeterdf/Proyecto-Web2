<?php
//require('libs/Smarty.class.php');
require_once('libs/Smarty.class.php');

class CategoriasView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarCatId($productos, $categorias) {
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('productos.tpl');
  }//productoyCategoria

  function mostrarabm($productos, $categorias) {
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('abm.tpl');
  }//todos


}
 ?>
