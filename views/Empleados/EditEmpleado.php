<?php include_once("../../assets/header.php") ?>
<?php include_once("../../Model/db.php") ?>

<?php

    if(isset($_GET['id'])){ 
    $id = $_GET['id'];
    $consult = "SELECT * FROM empleado WHERE IdEmpleado = $id";
    $result = mysqli_query($conexion,$consult);
    
        if(mysqli_num_rows($result)== 1){
            $row = mysqli_fetch_array($result);
            $user = $row['NombreEmpleado'];
            $apell = $row['ApellidoEmpleado'];
           
            
        }
    }


    if(isset($_POST['save'])){
        $User = $_POST['User'];
        $Apell = $_POST['apell'];
        

        $consult = "UPDATE empleado SET NombreEmpleado='$User',ApellidoEmpleado='$Apell' WHERE IdEmpleado = $id;";
        $error = mysqli_query($conexion,$consult);
        header("Location: ../indexUsuario.php");
    }
    
    
?>

<div class="container-lg my-4">
    <form action="EditPerfil.php?id=<?php echo $_SESSION['id'] ?>" method="post">
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="User" aria-describedby="helpId" value="<?php echo $user?>">
        </div>
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="Apell" aria-describedby="helpId" value="<?php echo $apell?>">
        </div>
        
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" name="save" class="btn btn-primary" value="Modificar">
        </div>
    </form>
</div>


<?php include_once("../../assets/fooder.php") ?>