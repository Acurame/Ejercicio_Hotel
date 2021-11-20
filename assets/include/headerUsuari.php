<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
  <div class="container">
    <a class="navbar-brand" href="#">Mira Mar</a>
      <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle Navbar">
          <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <div class="mx-auto"></div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/indexUsuario.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/Reservaciones.php">Mis Reservaciones</a>
        </li>
      </ul>
    </div>
    <div class="row justify-content-end px-5">
        <?php session_start() ?>
        <a class="btn btn-outline-success" href="/views/EditPerfil.php?id=<?php echo $_SESSION['id'] ?>"><?php echo $_SESSION['usuario'] ?></a>
    </div>
    <div class="row justify-content-end">
        <a class="btn btn-outline-success" href="/Logout.php">Cerrar sesion</a>
    </div>
  </div>
</nav>