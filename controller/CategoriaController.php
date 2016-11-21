<?php
//require_once ('model/CabaniaModel.php');
require_once ('controller/CabaniaController.php');
require_once ('view/CategoriaView.php');
require_once ('model/CategoriaModel.php');
require_once ('controller/AdminController.php');

class CategoriaController{

    private $modelCategoria;
    private $controllerAdmin;
    private $view;
  function __construct(){
    $this->view = new CategoriaView();
    $this->modelCategoria = new CategoriaModel();
    $this->controllerAdmin = new AdminController();
  }

  function iniciar(){
    $categorias = $this->getCategorias();
    $this->view->iniciar($categorias);
  }

  function buscarCabaniasCat(){
    if (isset($_POST["id_categoria"])) {
      $id_categoria = $_POST["id_categoria"];
      //llega
      $cabanias = $this->modelCategoria->buscarCabaniasCat($id_categoria);
      $categorias = $this->getCategorias();
      if (count($cabanias)>0) {
        $mensaje = "Su busqueda fue exitosa!";
      }else {
        $mensaje = "No hay cabanias con esa categoria";
      }

      $this->view->mostrarCabaniasCat($cabanias,$mensaje,$categorias);
    }

  }

  function getCategorias(){
    return $this->modelCategoria->getCategorias();
  }

  function iniciarEditor(){
    $categorias = $this->getCategorias();
    $this->view->mostrarEditor($categorias);
  }

  function editarCategoria(){
    if ($this->checkPrivilegio()==1) {
      $id_categoria = $_POST["data-idcategoria"];
      $valorInput = $_POST["valorInput"];

      if(isset($id_categoria,$valorInput) && (($id_categoria!="")&& ($valorInput!="")) ){
        $this->modelCategoria->editarCategoria($id_categoria,$valorInput);
        $this->controllerAdmin->mostrarListaCabanias();
      }  
    }
  }

  function eliminarCategoria(){
    if ($this->checkPrivilegio() == 1) {
      if (isset($_GET["id_categoria"])&& ($_GET["id_categoria"] != "")) {
        $id_categoria = $_GET["id_categoria"];
        $this->modelCategoria->eliminarCategoria($id_categoria);
        $this->controllerAdmin->mostrarListaCabanias();
      }
    }
  }

  function crearCategoria(){
    if ($this->checkPrivilegio() == 1) {
      if (isset($_POST["valorCategoria"]) && ($_POST["valorCategoria"]!="")) {
        $valor = $_POST["valorCategoria"];
        $this->modelCategoria->crearCategoria($valor);
        $this->controllerAdmin->mostrarListaCabanias();
      }
    }
  }

  function checkPrivilegio(){
    if(!isset($_SESSION["privilegio"])){
      $priv=0;
    }else{
      $priv = $_SESSION["privilegio"];
    }
    return $priv;
  }


}

 ?>
