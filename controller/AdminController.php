<?php
require_once ('model/CabaniaModel.php');
require_once ('model/CategoriaModel.php');
// require_once ('controller/CabaniaController.php');
require_once ('view/AdminView.php');

class AdminController{

  protected $modelCategoria;
  protected $modelCabania;

  function __construct(){
    $this->modelCabania = new CabaniaModel();
    $this->modelCategoria = new CategoriaModel();
    $this->view = new AdminView();
  }

  function crearCabania(){

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $imagenes = $_FILES["imagenes"];

    if (isset($imagenes,$categoria)&&($descripcion!="")&&($nombre!="")) {
      $this->modelCabania->crearCabania($nombre,$descripcion,$categoria,$imagenes);
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
    $estellas = $_POST['categoriaEdit'];
    $nombre = $_POST['nombreEdit'];
    $descripcion = $_POST['descripcionEdit'];
    $id_cabania = $_POST['data-idcabania'];

    if ($estellas!="-1"&&($descripcion!="")&&($nombre!="")) {
      $this->modelCabania->editCabania($id_cabania, $estellas, $nombre, $descripcion);
    }
    $this->mostrarListaCabanias();
  }
  function mostrarListaCabanias(){
    $cabanias = $this->modelCabania->getCabanias();
    $categorias = $this->modelCategoria->getCategorias();
    $this->view->mostrarListaCabanias($cabanias, $categorias);
  }
  function showCabanias(){
    $cabanias = $this->modelCabania->getCabanias();
    $categorias = $this->modelCategoria->getCategorias();
    $this->view->iniciarView($cabanias, $categorias);
  }
}

 ?>
