<?php

require_once ('model/CabaniaModel.php');

class CategoriaModel{

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=complejo;charset=utf8', 'root', '');
  }

  function buscarCabaniasCat($id_categoria){
    $sentencia = $this->db->prepare("select * from cabania where id_categoria=?");
    $sentencia->execute(array($id_categoria));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategorias(){
    $sentencia = $this->db->prepare("select * from categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function editarCategoria($id_categoria,$valor){
    $sentencia = $this->db->prepare("update categoria set estrella=? where id_categoria=? ");
    $sentencia->execute(array($valor,$id_categoria));
  }

  function eliminarCategoria($id_categoria){
    $sentencia = $this->db->prepare("delete from categoria where id_categoria=?");
    $sentencia->execute(array($id_categoria));
  }

  function crearCategoria($valor){
    $sentencia = $this->db->prepare("INSERT INTO categoria(estrella) VALUES(?)");
    $sentencia->execute(array($valor));
  }

}




 ?>
