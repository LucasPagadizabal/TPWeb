<?php
require_once("libs/Smarty.class.php");

class CabaniaView{

  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }
  function iniciarView($cabanias){
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->display("body.tpl");
  }
  function mostrarListaCabanias($cabanias){
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->display("cabanias.tpl");
  }
  function mostrarCabania($cabania){
    $this->smarty->assign("cabania",$cabania);
    $this->smarty->display("cabaniaComentario.tpl");
  }
}
?>
