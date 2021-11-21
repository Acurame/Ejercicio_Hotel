<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title>Hotel Mira Mar</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
        <div class="container">
            <a href="/index.php" class="navbar-brand">Hotel MiraMar</a>
            <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/views/<?php session_start(); if($_SESSION['rol'] == 1){echo "Clientes";}else if($_SESSION['rol'] == 2){echo "Empleados";} ?>/home.php" class="nav-link text-white">Incio</a>
                    </li>
                    <li class="nav-item">
                        <a href="/views/Clientes/Cliente.php" class="nav-link text-white">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Servicios" class="nav-link text-white">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Contactenos" class="nav-link text-white">Facturas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/views/Habitaciones/mantenimiento.php" class="nav-link text-white">Mantenimiento</a>
                    </li>
                    <li class="nav-item">
                        <a href="/registro.php" class="nav-link text-white">Habitaciones</a>
                    </li>
                    <li class="nav-item">
                        <a href="/registro.php" class="nav-link text-white">Objetos Perdidos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/registro.php" class="nav-link text-white">Asistencia</a>
                    </li>
                    <li class="nav-item">
                        <a href="/registro.php" class="nav-link text-white">Cotisasiones</a>
                    </li>
                    <li class="nav-item">
                        <a href="/controlador/Logout.php" class="nav-link text-white">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>