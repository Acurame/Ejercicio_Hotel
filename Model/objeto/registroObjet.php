<?php
include_once("../db.php");

if(isset($_POST['save'])){
    $name =  $_POST['name'];
    $descrip = $_POST['descrip'];
    

    $consulta = "INSERT INTO objetoolvidados(nombre, descripcion) VALUES ('$name','$descrip')";
    $error = mysqli_query($conexion,$consulta);

        if(!$error){
            die("Error");
        }
}
?>