<?php

class CabaniaModel{

  protected $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=complejo;charset=utf8', 'root', '');
  }

  function getCabanias(){
    $sentencia = $this->db->prepare("select * from cabania");
    $sentencia->execute();
    $cabanias = array();
    while ($cabania = $sentencia->fetch(PDO::FETCH_ASSOC)) {
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

    $cabania["estrella"] = $this->getTipoCat($cabania["id_categoria"]);
    $cabania["imagenes"] = $this->getImagenes($cabania["id_cabania"]);
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
    //print_r($sentencia->fetch(PDO::FETCH_ASSOC)["estrella"]);
    $estrella =$sentencia->fetch(PDO::FETCH_ASSOC)["estrella"];
    return $estrella;
  }

  function borrarCabania($id_cabania){
    $sentencia = $this->db->prepare("delete from cabania where id_cabania=?");
    $sentencia->execute(array($id_cabania));
  }

  function editarDisponibilidadCabania($id_cabania){
    $cabania = $this->getCabania($id_cabania);
    $sentencia = $this->db->prepare("update cabania set ocupada=? where id_cabania=?");
    $sentencia->execute(array(!$cabania["ocupada"],$id_cabania));
  }
  function editCabania($id_cabania, $estrellas, $nuevoNombre, $nuevaDescripcion){
    if ( (isset($id_cabania)) && (isset($estrellas)) && (isset($nuevoNombre)) && (isset($nuevaDescripcion)) ) {
      $buscarIdCategoria = $this->db->prepare("select id_categoria from categoria where estrella=?");
      $buscarIdCategoria->execute(array($estrellas));
      $idEncontrado = $buscarIdCategoria->fetch(PDO::FETCH_ASSOC)["id_categoria"];

      $sentencia = $this->db->prepare("update cabania set id_categoria=?,nombre=?,comentarios=? where id_cabania=?");
      $sentencia->execute(array($idEncontrado,$nuevoNombre,$nuevaDescripcion, $id_cabania));
    }
  }

  function buscarCabaniasCat($id_categoria){
      $sentencia = $this->db->prepare("select * from cabania where id_categoria=?");
      $sentencia->execute(array($id_categoria));
      $cabaniasPorCategoria = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      foreach ($cabaniasPorCategoria as $key => $cabania) {
          $cabaniasPorCategoria[$key]['imagenes']=$this->getImagenes($cabania['id_cabania']);
      }

      return($cabaniasPorCategoria);
  }
}
?>
