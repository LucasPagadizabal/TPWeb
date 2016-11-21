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
    $msj = "Ingrese datos";
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if((isset($user)&& ($user != "")) && (isset($pass)) &&($pass !="") ){
        $us = $this->model->getUser($user);
        if($us['email'] == ""){
          $pass = md5($pass);
          $this->model->crearUsuario($user,$pass);
          $msj = "El usuario se creo correctamente!";
        }else{
          $msj = "El usuario ya existe!";
        }
    }
    $this->view->mostrarForm($msj);
  }

  function login(){
    $user = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = md5($pass);

    if((isset($user)&&($user!=""))&&(isset($pass)&&($pass!=""))){
      $usuario = $this->model->getUser($user);
      if($usuario["contrasenia"] == $pass){
          $msj="Usted se logeo correctamente";
          session_destroy();
          session_start();
          $_SESSION['privilegio'] = $usuario["privilegio"];
          //header("Location: index.php?action=home");
          $this->view->mostrarForm($msj);
          die();
    }

    }
    $msj="No se pudo ingresar, error de Usuario y/o Clave";
    $this->view->mostrarForm($msj);


  }

  function cerrarSesion(){
    session_destroy();
    header("Location: index.php?action=mostrarLogin");
  }
}



 ?>
