<?php

require_once ('model/CabaniaModel.php');

class CategoriaModel extends CabaniaModel{

  function __construct(){
    parent::__construct();
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
