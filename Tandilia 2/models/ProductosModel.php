<?php
class ProductosModel
{
  private $productos;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=cerveceriatandilia;charset=utf8', 'root', '');

    $this->productos = ['rubia','negra','roja'];
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

  function crearProducto($producto){
  //Agrega en la ultima posicion del arreglo
  $sentencia = $this->db->prepare("INSERT INTO producto(nombre) VALUES(?)");
  $sentencia->execute(array($producto));
  $id_prodcuto = $this->db->lastInsertId();

  return $id_tarea;
  //$this->tareas[] = $tarea;
}

}
 ?>
