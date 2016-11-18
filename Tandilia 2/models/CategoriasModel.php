<?php
class CategoriasModel
{

  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=cerveceriatandilia;charset=utf8', 'root', '');
  }

  function getCategorias() {
    $sentencia = $this->db->prepare("SELECT * FROM categoria");
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $categorias;
  }

  function addCategoria($categoria) {
    $sentencia = $this->db->prepare("INSERT INTO categoria(nombre) VALUES(?) ");
    $sentencia->execute(array($categoria["nombre"]));
  }

  function editarCategoria($id_categoria,$nombre) {
    $sentencia = $this->db->prepare("UPDATE categoria SET nombre='$nombre'WHERE id_categoria=?");
    $sentencia->execute(array($id_categoria));
  }

  function eliminarCategoria($id_categoria) {
    $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=? ");
    $sentencia->execute(array($id_categoria));
  }
}
 ?>
