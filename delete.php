<?php
require_once("./session.php");


$id = $_POST['id']; 


$id = intval($id);


$sql = "DELETE FROM producto WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Producto eliminado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
