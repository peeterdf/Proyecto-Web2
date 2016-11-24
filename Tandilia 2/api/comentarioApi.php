<?php
require 'api.php';
require '../models/ComentarioModel.php';


class ComentarioApi extends Api
{
  private $model;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new ComentarioModel();
  }

  protected function comentario($argumentos){
//    session_start();
 //if (isset ($SESSION["nombre"])){
//   if($SESSION["permiso"]>0){

    switch ($this->method) {
      case 'GET':
          if(count($argumentos)>0){
            $comentario = $this->model->getComentarioprod($argumentos[0]);
            $error['Error'] = "El comentario no existe";
            $error['comentario'] = $comentario;
            return ($comentario) ? $comentario : $error;
          }else{
            return $this->model->getComentarios();
          }
        break;
      case 'DELETE':
          if(count($argumentos)>0){
            $error['Error'] = "El comentario no existe";
            $success['Success'] = "El comentario se borro";
            $filasAfectadas = $this->model->eliminarComentario($argumentos[0]);
            return ($filasAfectadas == 1) ? $success : $error;
          }
        break;
        case 'POST':
            if(count($argumentos)==0){
              $error['Error'] = "El comentario no se creo";
              $id_comentario = $this->model->crearComentario($_POST);//id usuario, id producto, comentario, puntaje
              return ($id_comentario > 0) ? json_encode($this->model->getcomentario($id_comentario)) : $error;
            }
          break;
      default:
           return "Only accepts GET";
        break;
        }
      //} //return "no tiene permiso";
      //}//else return "No tiene session";
   }

}


 ?>
