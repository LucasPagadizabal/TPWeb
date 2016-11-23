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
    $priv = $this->checkPrivilegio();
    $cabanias = $this->model->getCabanias();
    $session = $this->checkSession();
    $this->view->iniciarView($cabanias,$session,$priv);
  }

  function showCabania(){
    $priv = $this->checkPrivilegio();
    $id_cabania = $_GET["id_cabania"];
    $cabania = $this->model->getCabania($id_cabania);
    $session = $this->checkSession();
    $this->view->mostrarCabania($cabania,$session,$priv);

  }

  function mostrarListaCabanias(){
    $session = $this->checkSession();
    $cabanias = $this->model->getCabanias();
    $this->view->mostrarListaCabanias($cabanias,$session);
  }

  function checkSession(){
    if (isset($_SESSION["privilegio"])) {
      return $_SESSION["userEmail"];
    }else{
      return false;
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

  function eliminarImagen(){
    $priv = $this->checkPrivilegio();
    $id_imagen = $_POST["id_imagen"];
    $id_cabania = $_POST["id_cabania"];
    if (isset($id_imagen,$id_cabania)) {
      $this->model->eliminarImagen($id_imagen);
      $cabania = $this->model->getCabania($id_cabania);
      $session = $this->checkSession();
      $this->view->mostrarCabania($cabania,$session,$priv);
    }

    }
    function agregarImgCabExistente(){
      $priv = $this->checkPrivilegio();
      $imagenes = $_FILES["imagenes"];
      $id_cabania = $_POST['id_cab'];
      if (isset($imagenes)) {
        $this->model->agregarImgCabExistente($id_cabania,$imagenes);
        $cabania = $this->model->getCabania($id_cabania);
        $session = $this->checkSession();
        $this->view->mostrarCabania($cabania,$session,$priv);
      }
    }

}

 ?>
