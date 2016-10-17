<?php
require_once("libs/Smarty.class.php");
require_once("view/CabaniaView.php");

class CategoriaView extends CabaniaView{

  function __construct(){
    parent::__construct();
  }

  function iniciar(){
    $this->smarty->assign("lista", false);
    $this->smarty->display("cabaniasPorCat.tpl");
  }

  function mostrarCabaniasCat($cabanias,$mensaje){
    $this->smarty->assign("lista", true);
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("cabanias", $cabanias);
    $this->smarty->display("cabaniasPorCat.tpl");
  }
}
?>
