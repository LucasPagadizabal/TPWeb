<?php
require_once("libs/Smarty.class.php");

class CabaniaView{

  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function iniciarView($cabanias,$session){
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("sesion",$session);
    $this->smarty->display("body.tpl");
  }
  function mostrarListaCabanias($cabanias,$session){
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("sesion",$session);
    $this->smarty->display("cabanias.tpl");
  }
  function mostrarCabania($cabania,$session){
    $this->smarty->assign("sesion",$session);
    $this->smarty->assign("cabania",$cabania);
    $this->smarty->display("cabaniaComentario.tpl");
  }

}
?>
