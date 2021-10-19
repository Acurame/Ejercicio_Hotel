<?php

include_once("./conexion.php");


$IdHabiatciones=$_GET['IdHabiatciones'];

$sql="DELETE FROM habitaciones  WHERE NumeroHabitacion='$NumeroHabitacion'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: habitaciones.php");
    }
?>
