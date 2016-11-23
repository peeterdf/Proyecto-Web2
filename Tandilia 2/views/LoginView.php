<?php
require_once('libs/Smarty.class.php');

class LoginView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarRegistro(){
    $this->smarty->display('registro.tpl');
  }

  function mostrarlogin(){
    $this->smarty->display('login.tpl');
  }

}



 ?>
