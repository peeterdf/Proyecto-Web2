<?php
include_once ("models/Model.php");

class ProductosModel extends Model{

  function __construct() {
    parent::__construct();
  }
  function getProductosIdCat($id_categoria) {
    $sentencia = $this->db->prepare("SELECT producto.*, categoria.nombre AS nombre_categoria FROM producto INNER JOIN categoria ON producto.fk_id_categoria = categoria.id_categoria  WHERE id_categoria=?");
    $sentencia->execute(array($id_categoria));
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($productos as $key => $producto) {
      $productos[$key]['imagenes']=$this->getImagenes($producto['id_producto']);
    }
    return $productos;
  }

  function getProductos() {
    $sentencia = $this->db->prepare("SELECT producto.*, categoria.nombre AS nombre_categoria FROM producto INNER JOIN categoria ON producto.fk_id_categoria = categoria.id_categoria");
    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($productos as $key => $producto) {
      $productos[$key]['imagenes']=$this->getImagenes($producto['id_producto']);
    }

    return $productos;
  }

  function getProducto($id_producto) {
    $sentencia = $this->db->prepare("SELECT producto.*, categoria.nombre AS nombre_categoria FROM producto INNER JOIN categoria ON producto.fk_id_categoria = categoria.id_categoria WHERE id_producto=?");
    $sentencia->execute(array($id_producto));
    $producto = $sentencia->fetch(PDO::FETCH_ASSOC);
    $producto['imagenes']=$this->getImagenes($producto['id_producto']);

    return $producto;
  }

  function getImagenes($id_producto){
    $sentencia = $this->db->prepare( "SELECT * FROM imagen WHERE fk_id_producto=?");
    $sentencia->execute(array($id_producto));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function eliminarProducto($id_producto) {
    $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=? ");
    $sentencia->execute(array($id_producto));
  }

  function editarProducto($id_producto,$precio_may,$precio_min,$descripcion,$categoria) {
    $sentencia = $this->db->prepare("UPDATE producto SET precio_min='$precio_min', precio_may='$precio_may', descripcion='$descripcion', fk_id_categoria='$categoria' WHERE id_producto=?");
    $sentencia->execute(array($id_producto));
  }


  function addProducto($producto, $imagenes) {
    $sentencia = $this->db->prepare("INSERT INTO producto(fk_id_categoria, nombre, descripcion, precio_may, precio_min) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($producto["fk_id_categoria"], $producto["nombre"], $producto["descripcion"], $producto["precio_may"], $producto["precio_min"]));
    $id_producto = $this->db->lastInsertId();

  //Copiarla del lugar temporal al definitivo.
   foreach ($imagenes as $key => $imagen) {
     $path="images/".uniqid()."_".$imagen["name"];
     move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_producto) VALUES(?,?)");
     $insertImagen->execute(array($path,$id_producto));
    }
  }

  function cargaImg($id_producto,$imagenes){
    foreach ($imagenes as $key => $imagen) {
      $path="images/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_producto) VALUES(?,?)");
      $insertImagen->execute(array($path,$id_producto));
     }
  }

  function eliminarImagen($id_imagen) {
  $sentencia = $this->db->prepare("DELETE FROM imagen WHERE id_imagen=? ");
  $sentencia->execute(array($id_imagen));
}



}
 ?>
