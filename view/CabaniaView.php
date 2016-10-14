<?php
require_once("libs/Smarty.class.php");

class CabaniaView{

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

    function mostrar($cabanias, $administrador){
  //  print_r($cabanias);
    $this->smarty->assign("cabanias",$cabanias);
    $this->smarty->assign("admin",$administrador);
    $this->smarty->display("body.tpl");
  }
  function mostrarListaCabanias($cabanias, $administrador){
  $this->smarty->assign("admin",$administrador);
  $this->smarty->assign("cabanias",$cabanias);
  $this->smarty->display("cabanias.tpl");
}

  function mostrarCabania($cabania, $administrador){
    $this->smarty->assign("admin",$administrador);
    $this->smarty->assign("cabania",$cabania);
    $this->smarty->display("cabaniaComentario.tpl");
  }

  function showCabaniaCreada($mensaje, $tipo, $administrador){
    $this->smarty->assign("admin",$administrador);
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("tipoMensaje", $tipo);
    //$this->smarty->display("cabania.tpl");
  }
}






 ?>
