<?php

include_once ("models/Model.php");

class UserModel extends Model{

  function __construct() {
    parent::__construct();
  }

  function getUser($user){
    $sentencia = $this->db->prepare( "select * from usuario where email = ?");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
}

?>
