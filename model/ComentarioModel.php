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

  function getComentario($id_comentario){
    $sentencia = $this->db->prepare('SELECT * FROM comentario WHERE id_comentario=?');
    $sentencia->execute(array($id_comentario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getComentariosByIdCabania($id_cabania){
      $sentencia = $this->db->prepare('SELECT * FROM comentario WHERE id_cabania=?');
      $sentencia->execute(array($id_cabania));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function eliminarComentario($id_comentario){
    $sentencia = $this->db->prepare("delete from comentario where id_comentario=?");
    $sentencia->execute(array($id_comentario));
    return $sentencia->rowCount();
  }
  function crearComentario($texto,$puntaje,$id_cabania){
    $sentencia = $this->db->prepare("INSERT INTO comentario(texto,puntaje,id_cabania) VALUES(?,?,?)");
    $sentencia->execute(array($texto,$puntaje,$id_cabania));
    $id_comentario = $this->db->lastInsertId();
    return $id_comentario;
  }
}

 ?>
