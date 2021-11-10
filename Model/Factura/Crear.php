<?php
include_once("../db.php");

if(isset($_POST['save'])){
    $NameClient =  $_POST['NameClient'];
    $ApellidClient = $_POST['ApellidClient'];
    $Nit = $_POST['Nit'];
    $Direccion = $_POST['Direccion'];

    $consult = "INSERT INTO clientes(NombreCliente, ApellidoCliente, Nit, Direccion) VALUES ('$NameClient','$ApellidClient','$Nit','$Direccion')";
    $error = mysqli_query($conexion,$consult);

        if(!$error){
            die("Error");
        }
}
?>