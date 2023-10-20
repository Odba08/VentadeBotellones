<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP CRUD MYSQL</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>

  <style>
    .navbar .container {
      display: flex;
      font-size: 30px;
      color: white;
      justify-content: space-around;
    }

    .title{
      color: white;
    }

    h2{
     font-size: 20px;
     position: absolute;
      right: 0;
      margin-right: 20px;
    }

  </style>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="title" href="index.php">Inventario Botellones</a>  
      </div>
      <div class="navbar-brand auto">

      <h2>
  
      <a href="productos.php">Productos</a> 
      <a href="../userAccount.php?logoutSubmit=1" class="logout">Cerrar Sesión</a>
   
      </h2>
      
  
      
      </div>
    </nav>
