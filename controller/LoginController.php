<?php

require_once("model/LoginModel.php");
require_once("view/LoginView.php");

class LoginController{

  private $view;
  private $model;
  function __construct()
  {
    $this->model = new LoginModel();
    $this->view = new LoginView();
  }

  function mostrarPantallaLogin(){
    $this->view->mostrarForm("");
  }

  function crearUsuario(){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $us = $this->model->getUser($user);
    if($us['email'] == ""){
      $pass = md5($pass);
      $this->model->crearUsuario($user,$pass);
      $msj = "El usuario se creo correctamente!";
    }else{
      $msj = "El usuario ya existe!";
    }
    $this->view->mostrarForm($msj);

  }

  function login(){
    $user = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = md5($pass);

    $hash = $this->model->getUser($user)['contrasenia'];
    if($hash == $pass){
      session_start();
        $_SESSION['USER'] = $user;
        header("Location: index.php?action=admin");
        die();
    }
  }
}



 ?>
