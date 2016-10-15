<?php
require_once ('model/CabaniaModel.php');
require_once ('controller/CabaniaController.php');
require_once ('view/AdminView.php');

class AdminController extends CabaniaController{

  function __construct(){
    parent::__construct();
    $this->view = new AdminView();
  }

  function crearCabania(){

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $imagenes = $_FILES["imagenes"];

    if (isset($imagenes,$categoria)&&($descripcion!="")&&($nombre!="")) {
      $this->model->crearCabania($nombre,$descripcion,$categoria,$imagenes);
    }
    $this->mostrarListaCabanias();

  }
  function borrarCabania(){
    $id_cabania = $_GET["id_cabania"];
    $this->model->borrarCabania($id_cabania);
    $this->mostrarListaCabanias();
  }
  function editarDisponibilidadCabania(){
    $id_cabania = $_GET["id_cabania"];
    $this->model->editarDisponibilidadCabania($id_cabania);
    $this->mostrarListaCabanias();
  }
  function mostrarEditor($id_cabania){
    $cabania = $this->model->getCabania($id_cabania);
    $this->view->mostrarEditor($cabania);
  }
  function editarCabania(){
    $categoria = $_POST['categoriaEdit'];
    $nombre = $_POST['nombreEdit'];
    $descripcion = $_POST['descripcionEdit'];
    $id_cabania = $_POST['data-idcabania'];

    if ($categoria!="-1"&&($descripcion!="")&&($nombre!="")) {
      $this->model->editCabania($id_cabania, $categoria, $nombre, $descripcion);
    }
    $this->mostrarListaCabanias();
  }
  function mostrarListaCabanias(){
    $cabanias = $this->model->getCabanias();
    $this->view->mostrarListaCabanias($cabanias, true);
  }
  function showCabanias(){
    $cabanias = $this->model->getCabanias();
    $this->view->iniciarView($cabanias, true);
  }
}

 ?>
