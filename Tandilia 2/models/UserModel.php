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

  function getUsers(){
  $usuarios = $this->db->prepare( "SELECT * FROM usuario");
  $usuarios->execute();
  return $usuarios->fetchAll(PDO::FETCH_ASSOC);
}

function eliminarUsuario($id_usuario) {
  $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=? ");
  $sentencia->execute(array($id_usuario));
}

function editarPrivilegio($id_usuario){
    $usuario = $this->getUserId($id_usuario);
    $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id_usuario=?");
    $sentencia->execute(array(!$usuario['admin'],$id_usuario));
  }

  function getUserId($id_usuario){
    $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario=?");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function getUser($user){
    $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE email=?");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
}

?>
