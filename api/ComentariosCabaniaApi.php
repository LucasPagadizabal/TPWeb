<?php

require 'api.php';
include_once (dirname(__DIR__).'/model/ComentarioModel.php');
include_once (dirname(__DIR__).'/controller/AdminController.php');

class ComentarioApi extends Api
{
  private $model;
  private $adminController;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new ComentarioModel();
    $this->adminController = new AdminController();
  }

  protected function comentarios($argumentos){
    switch ($this->method) {
      case 'GET':
          return $this->model->getComentariosByIdCabania($argumentos[0]);
        break;

      case 'DELETE':
      if ($this->adminController->checkPrivilegio() == 1) {
            if(count($argumentos)>0){
              $error['Error'] = "El comentario no existe";
              $success['Success'] = "El comentario se borro";
              $filasAfectadas = $this->model->eliminarComentario($argumentos[0]);
                return ($filasAfectadas == 1) ? $success : $error;
              }
            }
        break;

        case 'POST':
          if ($this->adminController->checkPrivilegio() >= 0) {
            if(count($argumentos)==0){
              if (isset($_POST["texto"]) && ($_POST["texto"] != "")) {
                $error['Error'] = "El comentario no se creo";
                $id_comentario = $this->model->crearComentario($_POST["texto"],$_POST["puntaje"],$_POST["id_cabania"]);
                }
              }
            }
              return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;

          break;
      default:
        "Metodo no valido";
        break;
    }

   }

 }


 ?>
