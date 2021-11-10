<?php
$direciones = "../../img/imagenes_abitaciones/";
$nameimg = basename($_FILES["img"]["name"]);
$archivo = $direciones . "/" . $nameimg;
include("../db.php");
 


if(isset($_POST['save'])){
    $NumeroHabitacion =  $_POST['Numero'];
    $Descipcion = $_POST['Descipcion'];
    $Precio = $_POST['Precio'];
    $consult = "INSERT INTO habitaciones(NumeroHabitacion, DescripcionHabitacion, PrecioHabitacion, imagenHabitacion) VALUES ('$NumeroHabitacion','$Descipcion','$Precio','$nameimg')";
    $error = mysqli_query($conexion,$consult);
    move_uploaded_file($_FILES["img"]["tmp_name"], $archivo);
    if(!$error){
        die("Error");
    }

    
    
}

header("Location: ../../views/HabitacionesAdmin.php");