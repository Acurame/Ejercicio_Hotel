<?php
include_once("./conexion.php");

/*$IdHabiatciones=$_POST['IdHabiatciones'];*/
$NumeroHabitacion=$_POST['NumeroHabitacion'];
$DescripcionHabitacion=$_POST['DescripcionHabitacion'];
$PrecioHabitacion=$_POST['PrecioHabitacion'];
$imagenHabitacion=addslashes(file_get_contents($_FILES['imagenHabitacion']['tmp_name']));
/*$imagenHabitacion=basename($_FILES["imagenHabitacion"]["name"]);*/

$sql="INSERT INTO habitaciones(NumeroHabitacion, DescripcionHabitacion, PrecioHabitacion, imagenHabitacion) VALUES ('$NumeroHabitacion','$DescripcionHabitacion','$PrecioHabitacion','$imagenHabitacion')";
$query= mysqli_query($conexion,$sql);

header("Location: habitaciones.php")
?>  