<?php
include_once("../db.php");
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM usuarios WHERE IdUsuario = $id";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result)== 1){
            $row = mysqli_fetch_array($result);
            $Name =  $row['NombreUsuario'];
            $Passwd = $row['password'];
            $Mail = $row['Correo'];
            $State = $row['rol'];
        }

    }
if(isset($_POST['edit'])){
    
    $name =  $_POST['name'];
    $passwd = $_POST['passwd'];
    $mail = $_POST['mail'];
    $state = $_POST['state'];
    
    $consult = "UPDATE usuarios SET NombreUsuario='$name',password='$passwd',Correo='$mail',rol='$state' WHERE IdUsuario = $id";
    $error = mysqli_query($conexion,$consult);
    header("Location: ../../views/usuariosAdmin.php");
}
?>


<?php include_once("../../include/headerAdmin.php") ?>
<?php include_once("../../Model/db.php") ?>
<div class="container-lg my-4">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <form action="Editar.php?id=<?php echo $_GET['id']?>" method="post">
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control" name="name" aria-describedby="helpId" value="<?php echo $Name ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control" name="passwd" aria-describedby="helpId" value="<?php echo $Passwd ?>"">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control" name="paswd2" aria-describedby="helpId" value="<?php echo $Passwd ?>"">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control" name="mail" aria-describedby="helpId" value="<?php echo $Mail ?>"">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <select class="form-control" name="state" >
                    <option value="1">Administrador</option>
                    <option value="2">Personal</option>
                    <option value="3">Usuario</option>
                    <option value="0">Desactivar</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" name="edit" class="btn btn-primary">Editar</button>
                    <a href="/views/usuariosAdmin.php" class="btn btn-primary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once("../../include/fooder.php") ?>