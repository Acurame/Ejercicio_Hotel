<?php
include_once("../db.php");

if(isset($_POST['save'])){
    $name =  $_POST['name'];
    $passwd = $_POST['passwd'];
    $mail = $_POST['mail'];
    $state = $_POST['state'];

    $consult = "INSERT INTO usuarios(NombreUsuario, password, Correo, rol) VALUES ('$name','$passwd','$mail','$state')";
    $error = mysqli_query($conexion,$consult);

        if(!$error){
            die("Error");
        }
    
    
}
?>