<?php
include_once("../db.php");

if(isset($_POST['save'])){
    $name =  $_POST['name'];
    $lastname = $_POST['lastname'];
    $user = $_POST['User'];

    $consult = "INSERT INTO empleado(NombreEmpleado, ApellidoEmpleado, IdUsuario) VALUES ('$name','$lastname','$user')";
    $error = mysqli_query($conexion,$consult);

        if(!$error){
            die("Error");
        }
}
?>