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

}
 ?>
