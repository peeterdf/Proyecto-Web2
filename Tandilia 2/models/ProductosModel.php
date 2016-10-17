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

  function addProducto($producto){
  //print_r ($producto);
  //Agrega en la ultima posicion del arreglo
  $sentencia = $this->db->prepare("INSERT INTO producto(nombre, descripcion, precio_may, precio_min) VALUES(?,?,?,?)");
  $sentencia->execute(array($producto["nombre"], $producto["descripcion"], $producto["precio_may"], $producto["precio_min"]));
  $id_producto = $this->db->lastInsertId();

  return $id_producto;
  //$this->tareas[] = $tarea;
}

}
 ?>
