<?php
require_once("libs/Smarty.class.php");


class AdminView{

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarEditor($cabania,$categorias){
    $this->smarty->assign("cabania", $cabania);
    $this->smarty->assign("categorias", $categorias);
    $this->smarty->display("cabaniaEdicion.tpl");
  }

  function showCabaniaCreada($mensaje, $tipo){
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("tipoMensaje", $tipo);
  }
  function mostrarListaCabanias($cabanias,$categoria,$priv){
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("categorias",$categoria);
    $this->smarty->assign("privilegio" , $priv);
    $this->smarty->display("cabaniasEdiciones.tpl");
  }
  function iniciarView($cabanias,$categorias,$priv){
    $this->smarty->assign("categorias",$categorias);
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("privilegio",$priv);
    $this->smarty->display("cabaniasEdiciones.tpl");
  }
}
?>
