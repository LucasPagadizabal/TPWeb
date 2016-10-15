<?php

require_once("config/configApp.php");
require_once("controller/CabaniaController.php");
require_once("controller/AdminController.php");

$CabaniaController = new CabaniaController();
$AdminController = new AdminController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  // Home del sitio
  $CabaniaController->iniciar();
  die();
}
switch($_REQUEST[ConfigApp::$ACTION]){

  case ConfigApp::$ACTION_SHOW_CABANIA:
  if(!empty($_GET["id"])){
    $CabaniaController->showCabania(($_GET["id"]));
  }
  break;

  case ConfigApp::$ACTION_HOME:
  $CabaniaController->iniciar();
  break;

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
  if(!empty($_GET["id"])){
    $AdminController->mostrarEditor($_GET["id"]);
  }
  break;

  case ConfigApp::$ACTION_EDITAR_CABANIA:
  $AdminController->editarCabania();
  break;

  case ConfigApp::$ACTION_ADMIN:
  $AdminController->showCabanias();
  break;
}



?>
