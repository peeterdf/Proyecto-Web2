<?php
class ProductosModel
{
  private $productos;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=cerveceriatandilia;charset=utf8', 'root', '');
  }
  function getProductos(){
    $sentencia = $this->db->prepare( "select * from producto");
    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //foreach ($productos as $key => $producto) {
    //  $productos[$key]['imagenes']=$this->getImagenes($producto['id_producto']);
    //}
    return $productos;
  }

  function addProducto($producto, $imagenes){

  $sentencia = $this->db->prepare("INSERT INTO producto(nombre, descripcion, precio_may, precio_min, categoria_id) VALUES(?,?,?,?,?)");
  $sentencia->execute(array($producto["nombre"], $producto["descripcion"], $producto["precio_may"], $producto["precio_min"], $producto["categoria_id"]));
  $id_producto = $this->db->lastInsertId();

  //Copiarla del lugar temporal al definitivo.
    foreach ($imagenes as $key => $imagen) {
      $path="images/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_tarea) VALUES(?,?)");
      $insertImagen->execute(array($path,$id_tarea));
    }

  return $id_producto;
  //$this->tareas[] = $tarea;
}

}
 ?>
