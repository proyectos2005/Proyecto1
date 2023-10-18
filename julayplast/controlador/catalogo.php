<?php
  // Importar la biblioteca de MySQLi
  require_once "includes/mysqli.php";

  // Obtener los datos del formulario
  $producto = $_POST['producto'];
  $precio_unidad = $_POST['precio_unidad'];
  $precio_fardo = $_POST['precio_fardo'];
  $imagen = $_FILES['imagen']['name'];
  $descripcion = $_POST['descripcion'];


  // crear una conexion con la base de datos 
  $mysqli = new mysqli("localhost", "root", "password", "mydatabase");
  
  // Guardar los datos en la base de datos
  $mysqli->query("INSERT INTO catalogo (producto, precio_unidad, precio_fardo, imagen, descripcion) VALUES ('$producto', '$precio_unidad', '$precio_fardo', '$imagen', '$descripcion') BUCKET 'catalogo'");
  
  // Redireccionar a la página de inicio
  header("Location: index.php");
?>
