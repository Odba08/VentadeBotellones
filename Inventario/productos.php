<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      </div>
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre Producto</th>
            <th>Cantidad</th>
            <th>Lote</th>
            <th>Fecha Vencimiento</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Fecha de creacion</th>
            <th>Accion</th> 
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM productos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['lote']; ?></td>
            <td><?php echo $row['vencimiento']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_prod.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-4">
      <button id="btn" onclick="abrirPagina()" class="btn btn-success">Generar PDF MySQL</button>

      <br>
    </div>
  </div>
</main>

<script>
function abrirPagina() {
  window.open('fpdf/PruebaH.php', '_blank');
}
</script>