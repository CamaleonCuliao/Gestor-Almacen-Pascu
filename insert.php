<?php
require_once("./session.php");

// Insertar datos en la bd
$sql = "INSERT INTO producto (nombre, categoria, proveedor, stock)
VALUES ('John', 'Doe', 'john@example.com', 'patata')";
// Cambiar los datos a la hora de insertar los correctos

if ($conn->query($sql) === TRUE) {
  echo "Datos insertados correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}