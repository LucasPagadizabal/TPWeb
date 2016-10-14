<?php

class CabaniaModel{

  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=complejo;charset=utf8', 'root', '');
  }

  function getCabanias(){
    //echo"entro a gets";
    $sentencia = $this->db->prepare("select * from cabania");
    $sentencia->execute();
    //$cabanias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //return $cabanias;
    $cabanias = array();
    while ($cabania = $sentencia->fetch(PDO::FETCH_ASSOC)) {
      //print_r($cabania);
      $cabania["categoria"] = $this->getTipoCat($cabania["id_categoria"]);
      $cabanias[] = $cabania;
    }
    foreach ($cabanias as $key => $cabania) {
        $cabanias[$key]['imagenes']=$this->getImagenes($cabania['id_cabania']);
    }
    return($cabanias);

  }
  function getImagenes($id_cabania){
    $sentencia = $this->db->prepare( "select * from imagen where fk_id_cabania=?");
    $sentencia->execute(array($id_cabania));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }



  function getCabania($id_cabania){
    $sentencia = $this->db->prepare("select * from cabania where id_cabania=?");
    $sentencia->execute(array($id_cabania));
    $cabania = $sentencia->fetch(PDO::FETCH_ASSOC);

    $cabania["categoria"] = $this->getTipoCat($cabania["id_categoria"]);
    return $cabania;
  }
  function crearCabania($nombre,$descripcion,$categoria,$imagenes){
    $sentencia = $this->db->prepare("INSERT INTO cabania(nombre, comentarios, id_categoria) VALUES(?,?,?)");
    $sentencia->execute(array($nombre, $descripcion, $categoria));

    $id_cabania = $this->db->lastInsertId();

    $max = sizeof($imagenes["name"]);
    
    for ($i=0; $i < $max; $i++) {
    $path="images/".uniqid()."_".$imagenes["name"][$i];
    move_uploaded_file($imagenes["tmp_name"][$i], $path);
    $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_cabania) VALUES(?,?)");
    $insertImagen->execute(array($path,$id_cabania));
  }
}


  function getTipoCat($id_categoria) {
    $sentencia = $this->db->prepare("select estrella from categoria where id_categoria = ?");
    $sentencia->execute(array($id_categoria));
    return($sentencia->fetch(PDO::FETCH_ASSOC)["estrella"]);
  }

  function borrarCabania($id_cabania){
    $sentencia = $this->db->prepare("delete from cabania where id_cabania=?");
    $sentencia->execute(array($id_cabania));
  }

  function editarCabania($id_cabania){
    $cabania = $this->getCabania($id_cabania);
    $sentencia = $this->db->prepare("update cabania set ocupada=? where id_cabania=?");
    $sentencia->execute(array(!$cabania["ocupada"],$id_cabania));
  }



}






 ?>
