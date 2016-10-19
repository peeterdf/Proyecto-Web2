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

  function addProducto($producto, $imagenes) {
    echo "asdasd";
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre, descripcion, precio_may, precio_min, fk_id_categoria) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($producto["nombre"], $producto["descripcion"], $producto["precio_may"], $producto["precio_min"], $producto["fk_id_categoria"]));
    $id_producto = $this->db->lastInsertId();

  //Copiarla del lugar temporal al definitivo.
   foreach ($imagenes as $key => $imagen) {
     $path="images/".uniqid()."_".$imagen["name"];
     move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_producto) VALUES(?,?)");
     $insertImagen->execute(array($path,$id_producto));
    }

  return $id_producto;
  }

  function eliminarTarea($id_tarea){

    $sentencia = $this->db->prepare("delete from producto where id_tarea=?");
    $sentencia->execute(array($id_tarea));
    return $sentencia->rowCount();

  }

}
 ?>
