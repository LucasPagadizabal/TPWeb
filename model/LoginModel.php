<?php

class LoginModel
{
  protected $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=complejo;charset=utf8', 'root', '');
  }

  function crearUsuario($user, $pass){
    $sentencia = $this->db->prepare('INSERT INTO usuario(email, contrasenia) VALUES(?,?)');
    $sentencia->execute(array($user, $pass));
  }
  function getUser($user){
    $sentencia = $this->db->prepare('SELECT * FROM  usuario where email = ?');
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function getUsers(){
    $sentencia = $this->db->prepare('SELECT * FROM  usuario');
    $sentencia->execute(array());
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function editarUsuario($user){
    $usuario = $this->getUser($user);
    $sentencia = $this->db->prepare("UPDATE usuario SET privilegio=? WHERE email=?");
    $sentencia->execute(array(!$usuario["privilegio"],$user));
  }

}
 ?>
