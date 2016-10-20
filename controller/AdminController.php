<?php
require_once ('model/CabaniaModel.php');
require_once ('controller/CabaniaController.php');
require_once ('view/AdminView.php');
require_once ('model/CategoriaModel.php');

class AdminController{

  protected $modelCategoria;
  protected $modelCabania;

  function __construct(){
    $this->modelCabania = new CabaniaModel();
    $this->view = new AdminView();
    $this->modelCategoria = new CategoriaModel();
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
    $this->modelCabania->borrarCabania($id_cabania);
    $this->mostrarListaCabanias();
  }
  function editarDisponibilidadCabania(){
    $id_cabania = $_GET["id_cabania"];
    $this->modelCabania->editarDisponibilidadCabania($id_cabania);
    $this->mostrarListaCabanias();
  }
  function mostrarEditor(){
    $id_cabania = $_GET["id_cabania"];
    $cabania = $this->modelCabania->getCabania($id_cabania);
    $categorias = $this->modelCategoria->getCategorias();
    $this->view->mostrarEditor($cabania,$categorias);
  }
  function editarCabania(){
    $categoria = $_POST['categoriaEdit'];
    $nombre = $_POST['nombreEdit'];
    $descripcion = $_POST['descripcionEdit'];
    $id_cabania = $_POST['data-idcabania'];

    if ($categoria!="-1"&&($descripcion!="")&&($nombre!="")) {
      $this->modelCabania->editCabania($id_cabania, $categoria, $nombre, $descripcion);
    }
    $this->mostrarListaCabanias();
  }
  function mostrarListaCabanias(){
    $cabanias = $this->modelCabania->getCabanias();
    $categorias = $this->modelCategoria->getCategorias();
    $this->view->mostrarListaCabanias($cabanias, true, $categorias);
  }
  function showCabanias(){
    $cabanias = $this->modelCabania->getCabanias();
    $categorias = $this->modelCategoria->getCategorias();
    $this->view->iniciarView($cabanias, true, $categorias);
  }
}

 ?>
