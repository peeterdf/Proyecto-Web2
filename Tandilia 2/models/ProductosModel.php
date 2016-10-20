<?php
class ProductosModel
{
  private $productos;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=cerveceriatandilia;charset=utf8', 'root', '');
  }

  function getProductos() {
    $sentencia = $this->db->prepare("SELECT producto.*, categoria.nombre AS nombre_categoria FROM producto INNER JOIN categoria ON producto.fk_id_categoria = categoria.id_categoria");
    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //foreach ($productos as $key => $producto) {
    //  $productos[$key]['imagenes']=$this->getImagenes($producto['id_producto']);
    //}
    return $productos;
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

    //return $id_producto;
  }

  function eliminarCategoria($id_categoria) {
    $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=? ");
    $sentencia->execute(array($id_categoria));
  }

  function eliminarProducto($id_producto) {
    $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=? ");
    $sentencia->execute(array($id_producto));
  }

}
 ?>
