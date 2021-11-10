
<?php include_once("../include/headerAdmin.php") ?>
<?php include_once("../Model/db.php") ?>
<div class="container-lg my-4">
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success btn-lg" data-bs-toggle="modal" data-bs-target="#Crear">
  Crear
</button>

<!-- Modal -->
<div class="modal fade" id="Crear" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../Model/Usuarios/Create.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Nombre de Usuario">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="passwd" id="" aria-describedby="helpId" placeholder="Contrasña">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="paswd2" id="" aria-describedby="helpId" placeholder="Confirmacion de contraseña">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="mail" id="" aria-describedby="helpId" placeholder="Correo electronico">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <select class="form-control" name="state" id="">
                        <option value="1">Administrador</option>
                        <option value="2">Personal</option>
                        <option value="3">Usuario</option>
                        <option value="4">Desactivar</option>
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
  <table class="table ">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre de Usuario</th>
        <th>contraseña</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT * FROM usuarios";
      $result = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($result)){
      if($row['rol'] != 4){
      ?>
        <tr>
          <td><?php echo $id = $row['IdUsuario'] ?></td>
          <td><?php echo $row['NombreUsuario'] ?></td>
          <td><?php echo $row['password'] ?></td>
          <td><?php echo $row['Correo'] ?></td>
          <td><?php switch($row['rol']){
            case 1:
              echo 'Administrador';
              break;
            case 2:
              echo 'Personal';
              break;
            case 3:
              echo 'Usuario';
              break;
            case 0:
              echo 'Inactiva';
              break;
            } ?>
          </td>
          <th>
            <a href="../Model/Usuarios/Editar.php?id=<?php echo $row['IdUsuario'] ?>" class="btn btn-warning btn-lg"> Editar</a>
            <a href="../Model/Usuarios/Eliminar.php?id=<?php echo $row['IdUsuario'] ?>" class="btn btn-danger btn-lg"> Eliminar</a>
          </th>
        </tr>
      <?php } }?>
    </tbody>
  </table>
</div>

<?php include_once("../include/fooder.php") ?>
