<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  if(!$nombre) {
    echo"ingrese un producto por favor ";
  }
  $cantidad = $_POST['cantidad'];
  $lote = $_POST['lote'];
  $vencimiento = $_POST['vencimiento'];
  $description = $_POST['description'];
  $precio = $_POST['precio'];
  $query = "INSERT INTO productos(nombre, cantidad, lote, vencimiento, description, precio) VALUES ('$nombre', $cantidad, $lote, '$vencimiento','$description',$precio)";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Compra Exitosa';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
