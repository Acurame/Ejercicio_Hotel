
<?php
//include('db.php');
include("Model/db.php"); 

session_start();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$_SESSION['usuario']=$usuario;

$rol = 0;
//$conexion=mysqli_connect("localhost","root","","examen");


$consulta="SELECT*FROM usuarios WHERE NombreUsuario = '$usuario' and password = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas == 1){
  $row = mysqli_fetch_array($resultado);
  $_SESSION['id']= $row['IdUsuario'];
  $rol = $row['rol'];
  
}


if($filas == 1){
    echo $rol;
    if($rol == '1'){
      header("location:indexadmin.php");
    }else if($rol == '2'){
      header("location:indexEmpleado.php");
    }else if($rol == '3')
    {
      header("location:indexUsuario.php");
    }

}else{
    ?>
    <?php include("index.php"); ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
