<?php
include_once ("Model.php");

class ComentarioModel extends Model{

  function __construct() {
    parent::__construct();
  }
  function getComentario($id_comentario) {
    $sentencia = $this->db->prepare("SELECT comentario.*, producto.nombre AS nombre_producto  FROM comentario INNER JOIN producto ON comentario.fk_id_producto = producto.id_producto  WHERE id_comentario=?");
    $sentencia->execute(array($id_comentario));
    $comentario = $sentencia->fetch(PDO::FETCH_ASSOC);

    return $comentario;
  }

  function getComentarios() {
    $sentencia = $this->db->prepare("SELECT comentario.*, producto.nombre AS nombre_producto  FROM comentario INNER JOIN producto,usuario ON comentario.fk_id_producto = producto.id_producto");
    $sentencia->execute();
    $comentario = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $comentarios;
  }


  function eliminarComentario($id_comentario) {
    $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=? ");
    $sentencia->execute(array($id_comentario));
    return $sentencia->rowCount();
  }

  function crearComentario($comentario) {
    $sentencia = $this->db->prepare("INSERT INTO comentario(textocomentario, puntuacion, fk_id_producto, fk_id_usuario) VALUES(?,?,?,?)");
    $sentencia->execute(array($comentario["textocomentario"], $comentario["puntaje"], $comentario["id_producto"], $comentario["id_usuario"]));
    $id_comentario = $this->db->lastInsertId();
    return $id_comentario;
    }


}
 ?>
