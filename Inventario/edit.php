<?php
include("db.php");
$nombre = '';
$cantidad ='';
$lote = '';
$vencimiento= '';
$description = '';
$precio= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM productos WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $cantidad = $row['cantidad'];
    $lote = $row['lote'];
    $vencimiento = $row['vencimiento'];
    $description = $row['description'];
    $precio = $row['precio'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $cantidad= $_POST['cantidad'];
  $lote= $_POST['lote'];
  $vencimiento= $_POST['vencimiento'];
  $description = $_POST['description'];
  $precio= $_POST['precio'];

  $query = "UPDATE productos set nombre = '$nombre', cantidad= $cantidad, lote = '$lote', vencimiento='$vencimiento', description = '$description',precio ='$precio' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'products Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: productos.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update nombre">
        </div>
        <div class="form-group">
          <input name="cantidad" type="number" class="form-control" value="<?php echo $cantidad; ?>" placeholder="Update cantidad">
        </div>
        <div class="form-group">
          <input name="lote" type="text" class="form-control" value="<?php echo $lote; ?>" placeholder="Update lote">
        </div>
        <div class="form-group">
          <input name="vencimiento" type="date" class="form-control" value="<?php echo $vencimiento; ?>" placeholder="Update vencimiento">
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="5"><?php echo $description;?></textarea>
        </div>
        <div class="form-group">
          <input name="precio" type="number" class="form-control" value="<?php echo $precio; ?>" placeholder="Update precio">
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
