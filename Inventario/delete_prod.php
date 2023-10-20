<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM productos WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'El producto ha sido Borrado';
  $_SESSION['message_type'] = 'danger';
  header('Location: productos.php');
}

?>
