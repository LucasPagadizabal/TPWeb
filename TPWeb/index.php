<?php

require_once("config/configApp.php");
require_once("controller/CabaniaController.php");

$CabaniaController = new CabaniaController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  // Home del sitio
  $CabaniaController->showCabanias();
  die();
}
switch($_REQUEST[ConfigApp::$ACTION]){
  case ConfigApp::$ACTION_SHOW_CABANIA:
  if(!empty($_GET["id"])){
    $CabaniaController->showCabania(($_GET["id"]));
  }
  break;

  case ConfigApp::$ACTION_CREATE_CABANIA:
  $CabaniaController->crearCabania();
  break;

  case ConfigApp::$ACTION_DELETE_CABANIA:
  $CabaniaController->borrarCabania();
  break;

  case ConfigApp::$ACTION_COMOLLEGAR_CABANIA:
  $CabaniaController->comoLlegar();
  break;
}



?>
