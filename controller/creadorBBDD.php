<?php

class creadorBBDD{

  function __construct(){

  }

  function crearBBDD($value=''){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE complejo";
    if ($conn->query($sql) === TRUE) {
       echo "Database created successfully";
    }

    $conn->close();
  }
}

 ?>
