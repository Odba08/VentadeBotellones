<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'inventario'
) or die(mysqli_erro($mysqli));

?>
