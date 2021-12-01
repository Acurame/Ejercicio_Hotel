<?php
//include('db.php');
include("../Model/db.php"); 


$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$rol = 0;
//$conexion=mysqli_connect("localhost","root","","examen");


$consulta="SELECT*FROM usuarios WHERE NombreUsuario = '$usuario' and password = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas == 1){
  $row = mysqli_fetch_array($resultado);
  $_SESSION['id']= $row['IdUsuario'];
  $_SESSION['rol']= $row['rol'];
  $rol = $row['rol'];
  
  switch($rol){
    case 1:
        header("location: ../views/home.php");
      break;

    case 2:
        header("location: ../views/home.php");
      break;

    default:
        header("location: ../views/Login.php");
        echo '<script src="/sweetAlert.js"></script>';
      break;
  }

}

mysqli_free_result($resultado);
mysqli_close($conexion);
