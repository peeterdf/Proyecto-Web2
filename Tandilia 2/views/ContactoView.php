<?php
//require('libs/Smarty.class.php');
require_once('libs/Smarty.class.php');

class ContactoView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarformcontacto(){
    $this->smarty->display('contacto.tpl');
  }




}
 ?>
