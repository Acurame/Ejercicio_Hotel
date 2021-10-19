<?php include_once("../include/headerUsuari.php") ?>
<?php include_once("../Model/db.php") ?>

<?php
    session_start();
    $id = $_SESSION['IdUsuario'];

    $consult = "SELECT * FROM usuarios WHERE IdUsuario = $id";
    $error = mysqli_query($conexion,$consult);
    
    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_array($result);
        $user = $row['NombreUsuario'];
        $password = $row['password'];
        $mail = $row['Correo'];
    }

    if(isset($_POST['save'])){
        $user = $_POST['name'];
        $password = $_POST['passwd'];
        $mail = $_POST['mail'];

        $consult = "INSERT INTO usuarios(NombreUsuario, password, Correo) VALUES ('$user','$password','$mail') WHERE IdUsuario = $id";
        $error = mysqli_query($conexion,$consult);
    }
    
    
?>

<div class="container-lg my-4">
    <form action="" method="post">
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="name" aria-describedby="helpId" placeholder="nombre de Usuario">
        </div>
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="passwd" aria-describedby="helpId" placeholder="contraseña">
        </div>
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="mail" aria-describedby="helpId" placeholder="Correo">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" name="save" class="btn btn-primary" value="Modificar">
        </div>
    </form>
</div>


<?php include_once("../include/fooder.php") ?>