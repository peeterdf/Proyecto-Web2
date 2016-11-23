<?php
include_once ("models/Model.php");

class ContactoModel extends Model{

  function __construct() {
    parent::__construct();
  }


  function addConsulta($contacto) {
    $sentencia = $this->db->prepare("INSERT INTO contacto(nombre, email, asunto, consulta) VALUES(?,?,?,?)");
    $sentencia->execute(array($contacto["nombre"], $contacto["email"], $contacto["asunto"], $contacto["consulta"]));
    $id_producto = $this->db->lastInsertId();

  }

}
 ?>
