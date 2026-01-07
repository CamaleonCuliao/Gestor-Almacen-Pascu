<?php
require_once("./session.php");

$sql = "INSERT INTO producto (nombre, categoria, proovedor, stock)
VALUES ('John', 'Doe', 'john@example.com', 'patata')";

if ($conn->query($sql) === TRUE) {
  echo "Datos insertados correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}