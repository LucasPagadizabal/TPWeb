<?php

require_once ('model/AdminModel.php');
require_once("view/AdminBBDDView.php");

class AdminBBDDController
{
  protected $model;
  protected $view;

  function __construct()
  {
    $this->model = new AdminModel();
    $this->view = new AdminBBDDView();
  }

  function editorBBDD(){
    $this->view->mostrarEditorBBDD();
  }
  function deleteBBDD(){
    $this->model->borrarBBDD();
    $this->view->mostrarEditorBBDD();
  }

  function cargarBBDD(){
    $this->model->cargarBBDD();

  }
}

 ?>
