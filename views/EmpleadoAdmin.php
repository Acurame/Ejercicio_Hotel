
<?php include_once("../include/headerAdmin.php") ?>
<?php include_once("../Model/db.php") ?>
<div class="container-lg my-4">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#Crear">
  Crear
</button>

<!-- Modal -->
<div class="modal fade" id="Crear" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../Model/Empleado/Crear.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Apellidos">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

</div>

<div class="container-lg my-4">
  <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Accion</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT IdEmpleado, NombreEmpleado, ApellidoEmpleado, usuarios.NombreUsuario FROM `empleado` INNER JOIN usuarios ON empleado.IdUsuario = usuarios.IdUsuario";
      $result = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($result)){
      ?>
        <tr>
          <td><?php echo $id = $row['IdEmpleado'] ?></td>
          <td><?php echo $row['NombreEmpleado'] ?></td>
          <td><?php echo $row['ApellidoEmpleado'] ?></td>
          <td><?php echo $row['NombreUsuario'] ?></td>
          <th>
            <a href="../Model/Empleado/Editar.php?id=<?php echo $row['IdEmpleado'] ?>" class="btn btn-success btn-lg"> Editar</a>
            <a href="" class="btn btn-success btn-lg"> Eliminar</a>
          </th>
        </tr>
      <?php  }?>
    </tbody>
  </table>
</div>

<?php include_once("../include/fooder.php") ?>