<?php
require_once('models/ContactoModel.php');
require_once('views/ContactoView.php');


class ContactoController
{
  private $vista;
  private $modelo;

  function __construct(){
    $this->modelo = new ContactoModel();
    $this->vista = new ContactoView();
  }


  function guardarConsulta() {

    if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["asunto"]) && isset($_POST["consulta"])){
        $consulta = $_POST;
        $this->modelo->addConsulta($consulta);
      }
  $this->vista->mostrarformcontacto();
  }


}
 ?>
