<?php

require_once("config/configApp.php");
require_once("controller/CabaniaController.php");
require_once("controller/LoginController.php");
require_once("controller/AdminController.php");
require_once("controller/CategoriaController.php");
require_once ("controller/creadorBBDD.php");

$creadorBBDD = new creadorBBDD();
$creadorBBDD->crearBBDD();
$CabaniaController = new CabaniaController();
$AdminController = new AdminController();
$CategoriaController = new CategoriaController();
$LoginController = new LoginController();
//

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  // Home del sitio
  if ($AdminController->checkBBDD()) {
    $CabaniaController->iniciar();
  }else {
     header("Location: db");
   }

    die();
}
switch($_REQUEST[ConfigApp::$ACTION]){


  // ACTIONS DE CABANIA


  case ConfigApp::$ACTION_SHOW_CABANIA:
  $CabaniaController->showCabania();
  break;

  case ConfigApp::$ACTION_HOME:
  $CabaniaController->iniciar();
  break;


  // ACTIONS DE ADMIN


  case ConfigApp::$ACTION_CREATE_CABANIA:
  $AdminController->crearCabania();
  break;

  case ConfigApp::$ACTION_DELETE_CABANIA:
  $AdminController->borrarCabania();
  break;

  case ConfigApp::$ACTION_EDITAR_DISP_CABANIA:
  $AdminController->editarDisponibilidadCabania();
  break;

  case ConfigApp::$ACTION_EDITOR_DE_CABANIA:
  $AdminController->mostrarEditor();
  break;

  case ConfigApp::$ACTION_EDITAR_CABANIA:
  $AdminController->editarCabania();
  break;

  case ConfigApp::$ACTION_ADMIN:
  $AdminController->showCabanias();
  break;




  // ACTIONS DE CATEGORIA


  case ConfigApp::$ACTION_CATEGORIAS:
  $CategoriaController->iniciar();
  break;

  case ConfigApp::$ACTION_BUSCAR_CABANIAS:
  $CategoriaController->buscarCabaniasCat();
  break;

  case ConfigApp::$ACTION_EDITOR_DE_CATEGORIAS:
  $CategoriaController->iniciarEditor();
  break;

  case ConfigApp::$ACTION_EDITAR_CATEGORIAS:
  $CategoriaController->editarCategoria();
  break;

  case ConfigApp::$ACTION_ELIMINAR_CATEGORIA:
  $CategoriaController->eliminarCategoria();
  break;

  case ConfigApp::$ACTION_CREATE_CATEGORIA:
  $CategoriaController->crearCategoria();
  break;

//login

  case ConfigApp::$ACTION_CREAR_USUARIO:
  $LoginController->crearUsuario();
  break;
  case ConfigApp::$ACTION_MOSTRAR_LOGIN:
  $LoginController->mostrarPantallaLogin();
  break;
  case ConfigApp::$ACTION_LOGIN:
  $LoginController->login();
  break;
  case ConfigApp::$ACTION_CERRAR_SESION:
  $LoginController->cerrarSesion();
  break;

  case ConfigApp::$ACTION_EDITAR_USUARIO:
  $AdminController->editarUsuario();
  break;

  case ConfigApp::$ACTION_ELIMINAR_IMAGEN:
  $CabaniaController->eliminarImagen();
  break;

  case ConfigApp::$ACTION_AGREGAR_IMG_CAB_EXISTENTE:
  $CabaniaController->agregarImgCabExistente();
  break;
}

?>
