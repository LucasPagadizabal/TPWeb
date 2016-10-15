<?php
require_once("libs/Smarty.class.php");
require_once("view/CabaniaView.php");

class AdminView extends CabaniaView{

  function __construct(){
    parent::__construct();
  }

  function mostrarEditor($cabania){
    $this->smarty->assign("cabania", $cabania);
    $this->smarty->display("cabaniaEdicion.tpl");
  }

  function showCabaniaCreada($mensaje, $tipo, $administrador){
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("admin",$administrador);
    $this->smarty->assign("tipoMensaje", $tipo);
  }
  function mostrarListaCabanias($cabanias, $administrador){
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("admin",$administrador);
    $this->smarty->display("cabanias.tpl");
  }
  function iniciarView($cabanias, $administrador){
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("admin",$administrador);
    $this->smarty->display("body.tpl");
  }
}
?>
