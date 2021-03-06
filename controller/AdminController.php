<?php
include_once (dirname(__DIR__).'/model/CabaniaModel.php');
include_once (dirname(__DIR__).'/model/CategoriaModel.php');
include_once (dirname(__DIR__).'/model/LoginModel.php');
include_once (dirname(__DIR__).'/view/AdminView.php');
session_start();
class AdminController{


  protected $modelCategoria;
  protected $modelCabania;
  protected $view;
  protected $modelLogin;

  function __construct(){
    $this->modelCabania = new CabaniaModel();
    $this->modelCategoria = new CategoriaModel();
    $this->modelLogin = new LoginModel();
    $this->view = new AdminView();

  }

  function crearBBDD(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE complejo";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
  }

  function checkBBDD(){
    return $this->modelCabania->checkBBDD();
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
    if($this->checkPrivilegio() == 1){
      if (isset($_GET["id_cabania"])&&($_GET["id_cabania"]!="")) {
        $id_cabania = $_GET["id_cabania"];
        $this->modelCabania->borrarCabania($id_cabania);
        $this->mostrarListaCabanias();
      }
    }

  }
  function editarDisponibilidadCabania(){
    if($this->checkPrivilegio() == 1){
      if (isset($_GET["id_cabania"]) &&($_GET["id_cabania"]!="")) {
        $id_cabania = $_GET["id_cabania"];
        $this->modelCabania->editarDisponibilidadCabania($id_cabania);
        $this->mostrarListaCabanias();
      }
    }
  }
  function mostrarEditor(){
    if($this->checkPrivilegio() == 1){
      if (isset( $_GET["id_cabania"]) && ( $_GET["id_cabania"]!="")) {
        $id_cabania = $_GET["id_cabania"];
        $cabania = $this->modelCabania->getCabania($id_cabania);
        $categorias = $this->modelCategoria->getCategorias();
        $this->view->mostrarEditor($cabania,$categorias);
      }
    }
  }
  function editarCabania(){
    if($this->checkPrivilegio() == 1){
      $estellas = $_POST['categoriaEdit'];
      $nombre = $_POST['nombreEdit'];
      $descripcion = $_POST['descripcionEdit'];
      $id_cabania = $_POST['data-idcabania'];
      if((isset($estellas,$nombre,$descripcion,$id_cabania)) && (($estellas!="-1") && ($descripcion!="") && ($nombre!="")) ){
        $this->modelCabania->editCabania($id_cabania, $estellas, $nombre, $descripcion);
      }
      $this->mostrarListaCabanias();
    }
  }

  function mostrarListaCabanias(){
    $priv = $this->checkPrivilegio();
    $cabanias = $this->modelCabania->getCabanias();
    $categorias = $this->modelCategoria->getCategorias();
    $usuarios = $this->modelLogin->getUsers();
    $this->view->mostrarListaCabanias($cabanias, $categorias,$priv,$usuarios);
  }



  function showCabanias(){
    $priv = $this->checkPrivilegio();
    $cabanias = $this->modelCabania->getCabanias();
    $categorias = $this->modelCategoria->getCategorias();
    $usuarios = $this->modelLogin->getUsers();
    $this->view->iniciarView($cabanias,$categorias,$priv,$usuarios);
  }

  function editarUsuario(){
    if($this->checkPrivilegio() == 1){
      $user = $_POST["nameUser"];
      $this->modelLogin->editarUsuario($user);
      $this->mostrarListaCabanias();
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
