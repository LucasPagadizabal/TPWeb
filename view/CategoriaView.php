<?php
require_once("libs/Smarty.class.php");


class CategoriaView{

  function __construct(){
    $this->smarty = new Smarty();
  }

  function iniciar($categorias){
    $this->smarty->assign("lista", false);
    $this->smarty->assign("categorias",$categorias);
    $this->smarty->display("cabaniasPorCat.tpl");
  }

  function mostrarCabaniasCat($cabanias,$mensaje,$categorias){
    $this->smarty->assign("lista", true);
    $this->smarty->assign("mensaje", $mensaje);
    $this->smarty->assign("categorias", $categorias);
    $this->smarty->assign("cabanias", $cabanias);
    $this->smarty->display("cabaniasPorCat.tpl");
  }

  function mostrarEditor($categorias){
    $this->smarty->assign("categorias",$categorias);
    $this->smarty->display("editorCategorias.tpl");
  }

}
?>
