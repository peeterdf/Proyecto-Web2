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

  function mostrarImg($imagenes) {
    $this->smarty->assign('imagenes',$imagenes);
    $this->smarty->display('abm.tpl');
  }

  function mostrarproductos($productos, $categorias) {
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('productos.tpl');
  }//productoyCategoria

  function mostrarproducto($producto,$usuario) {
    $this->smarty->assign('usuario',$usuario);
    $this->smarty->assign('producto',$producto);
    $this->smarty->display('producto.tpl');
  }

  function mostrarabm($productos, $categorias) {
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('abm.tpl');
  }//todos

  function mostrarMensaje($mensaje, $tipo) {
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }//producto
}
 ?>
