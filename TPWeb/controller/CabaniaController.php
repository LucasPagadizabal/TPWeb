<?php
require_once ('model/CabaniaModel.php');
require_once ('view/CabaniaView.php');

class CabaniaController{

  private $model;
  private $view;

  function __construct(){
    $this->model = new CabaniaModel();
    $this->view = new CabaniaView();
  }

  function showCabanias(){
    //echo"entro a show";
    $cabanias = $this->model->getCabanias();
    //echo"entro a show y paso getCabanias";
    $this->view->mostrar($cabanias);
  }

  function showCabania($id_cabania){
    $cabania = $this->model->getCabania($id_cabania);
    $this->view->mostrarCabania($cabania);
  }
  function crearCabania(){
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
  //  echo $descripcion;
    $this->model->crearCabania($descripcion,$categoria);
    $this->showCabanias();
  }
  function borrarCabania(){
    $id_cabania = $_GET["id_cabania"];
    $this->model->borrarCabania($id_cabania);
    $cabanias = $this->model->getCabanias();
    $this->view->mostrar($cabanias);
  }
//crear un controller para las pag estaticas
  function comoLlegar(){
    $this->view->comoLlegar();
  }

}

 ?>
