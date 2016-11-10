<?php

require_once("libs/Smarty.class.php");

class AdminBBDDView
{
  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarEditorBBDD(){
    $this->smarty->display("editorBBDD.tpl");
  }
}

 ?>
