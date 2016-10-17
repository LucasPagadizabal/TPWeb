<?php
require_once ('model/CabaniaModel.php');
require_once ('controller/CabaniaController.php');
require_once ('view/CategoriaView.php');
require_once ('model/CategoriaModel.php');
require_once ('controller/AdminController.php');

class CategoriaController extends CabaniaController{

  private $modelCategoria;
  private $controllerAdmin;
  function __construct(){
    parent::__construct();
    $this->view = new CategoriaView();
    $this->modelCategoria = new CategoriaModel();
    $this->controllerAdmin = new AdminController();
  }

  function iniciar(){
    $categorias = $this->getCategorias();
    $this->view->iniciar($categorias);
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
    $this->view->mostrarCabaniasCat($cabanias,$mensaje,$categorias);
  }

  function getCategorias(){
    return $this->modelCategoria->getCategorias();
  }

  function iniciarEditor(){
    $categorias = $this->getCategorias();
    $this->view->mostrarEditor($categorias);
  }

  function editarCategoria(){
    $id_categoria = $_POST["data-idcategoria"];
    $valorInput = $_POST["valorInput"];
    $this->modelCategoria->editarCategoria($id_categoria,$valorInput);
    $this->controllerAdmin->mostrarListaCabanias();
  }

  function eliminarCategoria(){
    $id_categoria = $_GET["id_categoria"];
    $this->modelCategoria->eliminarCategoria($id_categoria);
    $this->controllerAdmin->mostrarListaCabanias();
  }

  function crearCategoria(){
    $valor = $_POST["valorCategoria"];
    $this->modelCategoria->crearCategoria($valor);
    $this->controllerAdmin->mostrarListaCabanias();
  }

}

 ?>
