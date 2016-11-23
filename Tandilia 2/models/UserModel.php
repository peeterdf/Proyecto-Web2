<?php

include_once ("models/Model.php");

class UserModel extends Model{

  //function __construct() {
  //  parent::__construct();
  //}

  function existeUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
    $consulta->execute(array($email));
    $usuario =$consulta->fetch(PDO::FETCH_ASSOC);
    print_r($usuario);
    return ($usuario) ? true: false;

  }

  function altaUsuario($user){
      $nivelUser = 0;
      $newUser = $this->db->prepare("INSERT INTO usuario(nombre,email,pass,admin) VALUES(?,?,?,?) ");
      $newUser->execute(array($user["user"],$user["email"],$user["pass"],$nivelUser));
  }

  function getUser($user){
    $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE email=?");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
}

?>
