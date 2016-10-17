<?php
require_once ('model/CabaniaModel.php');
require_once ('view/CabaniaView.php');

class CabaniaController{

  protected $model;
  protected $view;

  function __construct(){
    $this->model = new CabaniaModel();
    $this->view = new CabaniaView();
  }

  function iniciar(){
    $cabanias = $this->model->getCabanias();
    $this->view->iniciarView($cabanias);
  }

  function showCabania($id_cabania){
    $cabania = $this->model->getCabania($id_cabania);
    $this->view->mostrarCabania($cabania);
  }

  function mostrarListaCabanias(){
    $cabanias = $this->model->getCabanias();
    $this->view->mostrarListaCabanias($cabanias);
  }

}

 ?>
