<?php
require_once("libs/Smarty.class.php");

class CabaniaView{

  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }
  function iniciarView($cabanias){
    if (isset($_SESSION["privilegio"])) {
      $session = true;
    }else{
      $session = false;
    }
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("sesion",$session);
    $this->smarty->display("body.tpl");
  }
  function mostrarListaCabanias($cabanias){
    if (isset($_SESSION["privilegio"])) {
      $session = true;
    }else{
      $session = false;
    }
    $this->smarty->assign("cabanias",$cabanias);
      $this->smarty->assign("sesion",$session);
    $this->smarty->display("cabanias.tpl");
  }
  function mostrarCabania($cabania){
    $this->smarty->assign("cabania",$cabania);
    $this->smarty->display("cabaniaComentario.tpl");
  }

}
?>
