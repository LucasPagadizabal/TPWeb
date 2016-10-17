<?php
require_once ('model/CabaniaModel.php');
require_once ('controller/CabaniaController.php');
require_once ('view/CategoriaView.php');

class CategoriaController extends CabaniaController{

  function __construct(){
    parent::__construct();
    $this->view = new CategoriaView();
  }

  function iniciar(){
    $this->view->iniciar();
  }

  function buscarCabaniasCat(){
    $id_categoria = $_POST["id_categoria"];
    //llega
    $cabanias = $this->model->buscarCabaniasCat($id_categoria);

    if (count($cabanias)>0) {
      $mensaje = "Su busqueda fue exitosa!";
    }else {
      $mensaje = "No hay cabanias con esa categoria";
    }

    $this->view->mostrarCabaniasCat($cabanias,$mensaje);
  }

}

 ?>
