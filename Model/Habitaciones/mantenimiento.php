<?php
include_once("../db.php");

if(isset($_POST['save'])){
    $NumeroHabitacion =  $_POST['Habi'];
    $Descipsion = $_POST['Descipsion'];

    $consult = "INSERT INTO `mantenimiento`(`descripcion`, `fecha`, `IdHabiatciones`) VALUES ('$Descipsion','CURDATE()','$NumeroHabitacion')";
    $error = mysqli_query($conexion,$consult);

        if(!$error){
            die("Error");
        }
    
    
}
?>