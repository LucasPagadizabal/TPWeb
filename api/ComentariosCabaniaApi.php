<?php

require 'api.php';
require '../model/ComentarioModel.php';

class ComentarioApi extends Api
{
  private $model;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new ComentarioModel();
  }

  protected function comentarios($argumentos){
    switch ($this->method) {
      case 'GET':
          return $this->model->getComentariosByIdCabania($argumentos[0]);
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
                $id_comentario = $this->model->crearComentario($_POST["texto"],$_POST["puntaje"],$_POST["id_cabania"]);
              }
              return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;

          break;
      default:
        "Only GET";
        break;
    }

   }

 }


 ?>
