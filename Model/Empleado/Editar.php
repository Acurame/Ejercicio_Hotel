<?php
include_once("../db.php");
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM empleado WHERE IdEmpleado = $id";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result)== 1){
            $row = mysqli_fetch_array($result);
            $Name =  $row['NombreEmpleado'];
            $LastName = $row['ApellidoEmpleado'];
            $User = $row['IdUsuario'];
        }

    }
if(isset($_POST['edit'])){
    
    $name =  $_POST['name'];
    $lastname = $_POST['lastname'];
    $user = $_POST['User'];
    
    $consult = "UPDATE empleado SET NombreEmpleado='$name',ApellidoEmpleado='$lastname',IdUsuario='$user' WHERE IdEmpleado = $id";
    $error = mysqli_query($conexion,$consult);
    header("Location: ../../views/EmpleadoAdmin.php");
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
                    <input type="text" class="form-control" name="lastname" aria-describedby="helpId" value="<?php echo $LastName ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <select class="form-control" name="User" id="">
                        <?php 
                            $query = "SELECT * FROM usuarios";
                            $result = mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_array($result)){
                            if($row['rol'] != 4){
                        ?> 
                        <option value="<?php echo $row['IdUsuario'] ?>"><?php echo $row['NombreUsuario'] ?></option>
                        <?php }} ?>
                      </select>
                </div>
                <div class="mb-3">
                    <button type="submit" name="edit" class="btn btn-primary">Editar</button>
                    <a href="/views/EmpleadoAdmin.php" class="btn btn-primary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once("../../include/fooder.php") ?>