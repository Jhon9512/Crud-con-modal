<?php
require '../config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Modal</title>
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/css/all.min.css" rel="stylesheet">
</head>

<body>

  <div class="container py-3">

    <h2 class="text-center">Contenio</h2>


    <div class="row justify-content-end">
      <div class="col-auto">
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal"><i class="fa-solid fa-circle-plus"></i>Nuevo Registro</a>
      </div>
    </div>

    <table class="table table-sm table-striped table-hover mt-4">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Género</th>
          <th>Poster</th>
          <th>Acción</th>
        </tr>
      </thead>

      <tbody>

      </tbody>

    </table>
  </div>

  <?php

  $sqlGenero = "SELECT id, nombre FROM genero";
  $generos = $conn->query($sqlGenero);

  ?>

  <?php include 'nuevoModal.php'; ?>

  <script src="../../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>