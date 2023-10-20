<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<style>

  .container .row{
    justify-content: space-around;
  }
</style>

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

      <div class="card card-body">
        <form action="save_prod.php" method="POST">
          <div class="form-group">
          <!--   <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre Producto" autofocus> -->
            <select for="text" id="nombre" name="nombre" class="form-control" > 
              <option value="Botellon">Botellon</option>
            </select>
          </div>
          <div class="form-group">
            <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad" autofocus>
          </div>
          <div class="form-group">
            <input type="text" id="lote" name="lote" class="form-control" placeholder="Lote" autofocus>
          </div>
          <div class="form-group">
          Fecha de Solicitud
            <input type="date" id="vencimiento" name="vencimiento" class="form-control" placeholder="Fecha Vencimiento" autofocus>
          </div>
          <div class="form-group">
            <textarea  id="description" name="description" rows="2" class="form-control" placeholder="Descripcion"></textarea>
          </div>
          <div class="form-group">
            <input type="number" id="precio" name="precio" class="form-control" placeholder="Precio" autofocus>
          </div>

          <input type="submit" id="save_task" name="save_task" class="btn btn-success btn-block" value="GUARDAR">

        </form>
      </div>
    </div>
    
  </div>
</main>




<script src="validar.js">
function validar(){
    var nombre, lote, cantidad, vencimiento, description, precio;
    nombre = document.getElementById("nombre").value;
    lote = document.getElementById("lote").value;
    cantidad = document.getElementById("cantidad").value;
    vencimiento = document.getElementById("vencimiento").value;
    description = document.getElementById("description").value;
    precio = document.getElementById("precio").value;

    if (nombre === "") {
        alert("Ingrese un producto");
    } else {
        alert("hello");
        
    }
}
</script>