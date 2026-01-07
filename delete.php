<?php
require_once("./session.php");

// Supongamos que el ID del producto a eliminar viene de un formulario
$id = $_POST['id']; // o $_GET['id'] dependiendo de cómo lo recibas

// Validar que sea un número para seguridad
$id = intval($id);

// Query DELETE
$sql = "DELETE FROM producto WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Producto eliminado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
