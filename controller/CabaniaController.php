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

  function showCabania(){
    $id_cabania = $_GET["id_cabania"];
    $cabania = $this->model->getCabania($id_cabania);
    $this->view->mostrarCabania($cabania, true);
  }

  function mostrarListaCabanias(){
    $cabanias = $this->model->getCabanias();
    $this->view->mostrarListaCabanias($cabanias, true);
  }

  function editorBBDD(){
    $this->view->mostrarEditorBBDD();
  }
  function deleteBBDD(){
    $this->model->borrarBBDD();
    $this->mostrarListaCabanias();
  }

  function cargarBBDD(){
    $this->model->cargarBBDD();

  }

}

 ?>
