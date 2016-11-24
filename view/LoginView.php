<?php

require_once("libs/Smarty.class.php");

class LoginView
{
  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarForm($msj, $tipoMsj){
    $this->smarty->assign('msj', $msj);
    $this->smarty->assign('tipoMsj', $tipoMsj);
    $this->smarty->display('login.tpl');
  }
}


 ?>
