<?php include_once("../include/headerUsuari.php") ?>
<?php include_once("../Model/db.php") ?>

<?php
    if(isset($_GET['id'])){ 
    $id = $_GET['id'];
    $consult = "SELECT * FROM usuarios WHERE IdUsuario = $id";
    $result = mysqli_query($conexion,$consult);
    
        if(mysqli_num_rows($result)== 1){
            $row = mysqli_fetch_array($result);
            $user = $row['NombreUsuario'];
            $password = $row['password'];
            $mail = $row['Correo'];
        }

        
    }
    if(isset($_POST['save'])){
        $User = $_POST['User'];
        $Password = $_POST['passwd'];
        $Mail = $_POST['mail'];

        $consult = "UPDATE usuarios SET NombreUsuario='$User',password='$Password',Correo='$Mail' WHERE IdUsuario = $id;";
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
          <input type="text" class="form-control" name="passwd" aria-describedby="helpId" value="<?php echo $password?>">
        </div>
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="mail" aria-describedby="helpId" value="<?php echo $mail?>">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" name="save" class="btn btn-primary" value="Modificar">
        </div>
    </form>
</div>


<?php include_once("../include/fooder.php") ?>