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
   if($this->method == 'GET' && count($argumentos)==0){
     return $this->model->getComentarios();
   }
   else{
     if($this->method == 'GET' && count($argumentos)>0){
       return $this->model->getComentariosByIdCabania($argumentos[0]);
     }
    else{
      return "Only accepts GET";
    }
   }
 }
 }


 ?>
