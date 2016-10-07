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
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
  //  echo $descripcion;
    $this->model->crearCabania($nombre,$descripcion,$categoria);
    $this->view->showCabaniaCreada("Se creo la cabaña correctamente.", "success");
    $this->showCabanias();
    $this->mostrarListaCabanias();

  }
  function borrarCabania(){
    $id_cabania = $_GET["id_cabania"];
    $this->model->borrarCabania($id_cabania);
    $this->mostrarListaCabanias();
  }
  function mostrarListaCabanias(){
    $cabanias = $this->model->getCabanias();
    $this->view->mostrarListaCabanias($cabanias);
  }

  function editarCabania(){
    $id_cabania = $_GET["id_cabania"];
    $this->model->editarCabania($id_cabania);
    $this->mostrarListaCabanias();
  }
}

 ?>
