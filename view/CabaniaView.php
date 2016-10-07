<?php
require_once("libs/Smarty.class.php");

class CabaniaView{

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

    function mostrar($cabanias){
  //  print_r($cabanias);
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->display("index.tpl");
  }
  function mostrarListaCabanias($cabanias){
  $this->smarty->assign("cabanias",$cabanias);
  $this->smarty->display("cabanias.tpl");
}

  function mostrarCabania($cabania){
    $this->smarty->assign("cabania",$cabania);
    $this->smarty->display("cabaniaComentario.tpl");
  }

  function showCabaniaCreada($mensaje, $tipo){
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("tipoMensaje", $tipo);
    //$this->smarty->display("cabania.tpl");
  }
}






 ?>
