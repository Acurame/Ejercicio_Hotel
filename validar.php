
<?php
//include('db.php');
include("Model/db.php"); 

session_start();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$_SESSION['usuario']=$usuario;


//$conexion=mysqli_connect("localhost","root","","examen");


$consulta="SELECT*FROM usuarios WHERE NombreUsuario = '$usuario' and password = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas == 1){
  $row = mysqli_fetch_array($resultado);
  $_SESSION['id']= $row['IdUsuario'];
  
  
}


if($filas == 1){
  
    header("location:Model/ini.php");

}else{
    ?>
    <?php include("index.php"); ?>
    <script src="/sweetAlert.js"></script>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
