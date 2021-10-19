<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body class="bg-black">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mira Mar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/indexUsuario.php">Inico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#precios">Precio</a>
        </li>
      </ul>
    </div>
    <div class="row justify-content-end px-5">
        <?php session_start() ?>
        <a class="btn btn-outline-success" href="/views/EditPerfil.php?id=<?php echo $_SESSION['id'] ?>"><?php echo $_SESSION['usuario'] ?></a>
    </div>
    <div class="row justify-content-end">
        <a class="btn btn-outline-success" href="Login.php">Inicio de sesion</a>
    </div>
  </div>
</nav>