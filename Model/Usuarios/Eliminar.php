<?php
include_once("../db.php");
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        
        $consult = "UPDATE usuarios SET rol= '4' WHERE IdUsuario = $id";
        $error = mysqli_query($conexion,$consult);
        header("Location: ../../views/usuariosAdmin.php");
    }
?>