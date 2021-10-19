<?php

include_once("./conexion.php");


$NumeroHabitacion=$_POST['NumeroHabitacion'];
$DescripcionHabitacion=$_POST['DescripcionHabitacion'];
$PrecioHabitacion=$_POST['PrecioHabitacion'];
$imagenHabitacion=addslashes(file_get_contents($_FILES['imagenHabitacion']['tmp_name']));


$sql="UPDATE habitaciones(NumeroHabitacion, DescripcionHabitacion, PrecioHabitacion, imagenHabitacion) SET('$NumeroHabitacion','$DescripcionHabitacion','$PrecioHabitacion','$imagenHabitacion')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: habitaciones.php");
    
}else {
}
?>
