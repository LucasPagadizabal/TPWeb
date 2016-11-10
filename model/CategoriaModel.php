<?php

require_once ('model/CabaniaModel.php');

class CategoriaModel{

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=complejo;charset=utf8', 'root', '');
  }

  function buscarCabaniasCat($id_categoria){
    $sentencia = $this->db->prepare("select * from cabania where id_categoria=?");
    $sentencia->execute(array($id_categoria));
    while ($cabania = $sentencia->fetch(PDO::FETCH_ASSOC)) {
      $cabania["estrellas"] = $this->getCantEstrellas($cabania["id_categoria"]);
      $cabanias[] = $cabania;
    }
    if (isset($cabanias)) {
      return $cabanias;
    }
  }

  function getCantEstrellas($id_categoria) {
    $sentencia = $this->db->prepare("select estrella from categoria where id_categoria = ?");
    $sentencia->execute(array($id_categoria));
    //print_r($sentencia->fetch(PDO::FETCH_ASSOC)["estrella"]);
    $estrella =$sentencia->fetch(PDO::FETCH_ASSOC)["estrella"];
    return $estrella;
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

  function eliminarCategoria($id_categoria,$estrellas){
    $sentencia = $this->db->prepare("delete from categoria where id_categoria=?");
    $sentencia->execute(array($id_categoria));
    $this->eliminarCabaniasPorCategoria($estrellas);

  }

  function eliminarCabaniasPorCategoria($estrellas){
    $sentencia = $this->db->prepare("delete from cabania where id_categoria=?");
    $sentencia->execute(array($estrellas));
  }

  function crearCategoria($valor){
    $sentencia = $this->db->prepare("INSERT INTO categoria(estrella) VALUES(?)");
    $sentencia->execute(array($valor));
  }

}

 ?>
