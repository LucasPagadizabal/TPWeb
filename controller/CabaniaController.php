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
    $session = $this->checkSession();
    $this->view->iniciarView($cabanias,$session);
  }

  function showCabania(){
    $id_cabania = $_GET["id_cabania"];
    $cabania = $this->model->getCabania($id_cabania);
    $session = $this->checkSession();
    $this->view->mostrarCabania($cabania, true,$session);
  }

  function mostrarListaCabanias(){
    $session = $this->checkSession();
    $cabanias = $this->model->getCabanias();
    $this->view->mostrarListaCabanias($cabanias, true,$session);
  }

  function checkSession(){
    if (isset($_SESSION["privilegio"])) {
      return true;
    }else{
      return false;
    }
  }


}

 ?>
