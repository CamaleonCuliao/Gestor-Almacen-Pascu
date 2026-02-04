<?php
require_once("./session.php");


// Recogiendo datos formulario
if(isset($_POST['nombre']) && !empty(trim($_POST['nombre'])) && isset($_POST['categoria']) && !empty(trim($_POST['categoria'])) && isset($_POST['proveedor']) && !empty(trim($_POST['proveedor'])) && isset($_POST['stock']) && !empty(trim($_POST['stock']))){
  //Valores
  $nombre = $_POST['nombre'];
  $categoria = $_POST['categoria'];
  $proveedor = $_POST['proveedor'];
  $stock = $_POST['stock'];
 //REGEXP
  $regexp_nombre="/^[A-Za-záÁéÉíÍóÓúÚñÑ]+(?: [A-Za-záÁéÉíÍóÓúÚñÑ]+)*$/";
  $regexp_categoria="/^[A-Za-záÁéÉíÍóÓúÚñÑ0-9\-_]+(?: [A-Za-záÁéÉíÍóÓúÚñÑ0-9\-_]+)*$/";
  $regexp_proveedor="/^[A-Za-záÁéÉíÍóÓúÚñÑ0-9\-_]+(?: [A-Za-záÁéÉíÍóÓúÚñÑ0-9\-_]+)*$/";
  $regexp_stock="/^[0-9]+$/";
//Validación (Nombre,categoría,proveedor,stock)
if(preg_match($regexp_nombre,$nombre) && preg_match($regexp_stock,$stock) && preg_match($regexp_proveedor,$proveedor) && preg_match($regexp_categoria,$categoria)){
// Insertar datos en la bd
$sql = "INSERT INTO producto (nombre, categoria, proveedor, stock)
VALUES ('$nombre', '$categoria', '$proveedor', '$stock')";
// Cambiar los datos a la hora de insertar los correctos

if ($conn->query($sql) === TRUE) {
  echo "Datos insertados correctamente";
} else {
  echo "<p class=\"error\">Error: " . $sql . "<br>" . $conn->error ."</p>";
}
}else{
  echo "<p class=\"error\">Ha ocurrido algo en la validación de los datos</p>";
}
}else{
  echo "<p class=\"error\">Ha ocurrido algo en los datos proporcionados.<p>";
}