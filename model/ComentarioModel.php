<?php

class ComentarioModel
{
  protected $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=complejo;charset=utf8', 'root', '');
  }

  function getComentarios(){
    $sentencia = $this->db->prepare('SELECT * FROM comentario');
    $sentencia->execute(array());
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getComentariosByIdCabania($id_cabania){
      $sentencia = $this->db->prepare('SELECT * FROM comentario WHERE id_cabania=?');
      $sentencia->execute(array($id_cabania));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}
 ?>
