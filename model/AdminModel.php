<?php

class AdminModel
{
  protected $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=complejo;charset=utf8', 'root', '');
  }


  function borrarBBDD(){
    $borradoCategorias = $this->db->prepare("TRUNCATE TABLE categoria");
    $borradoCategorias->execute();
    $borradoCabania = $this->db->prepare("TRUNCATE TABLE cabania");
    $borradoCabania->execute();
  }

  function cargarBBDD(){

  }

}



?>
