<?php
require_once("libs/Smarty.class.php");
require_once("view/CabaniaView.php");

class AdminView extends CabaniaView{

  function __construct(){
    parent::__construct();
  }

  function mostrarEditor($cabania,$categorias){
    $this->smarty->assign("cabania", $cabania);
    $this->smarty->assign("categorias", $categorias);
    $this->smarty->display("cabaniaEdicion.tpl");
  }

  function showCabaniaCreada($mensaje, $tipo, $administrador){
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("admin",$administrador);
    $this->smarty->assign("tipoMensaje", $tipo);
  }
  function mostrarListaCabanias($cabanias, $administrador,$categoria){
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("admin",$administrador);
    $this->smarty->assign("categorias",$categoria);
    $this->smarty->display("cabanias.tpl");
  }
  function iniciarView($cabanias, $administrador,$categorias){
    $this->smarty->assign("categorias",$categorias);
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("admin",$administrador);
    $this->smarty->display("body.tpl");
  }
}
?>
