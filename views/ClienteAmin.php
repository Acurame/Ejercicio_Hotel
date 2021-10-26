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
  <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Nit</th>
        <th>Diresion</th>
        <th>Usuario</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT IdClientes, NombreCliente, ApellidoCliente,Nit,Direccion, usuarios.NombreUsuario FROM clientes INNER JOIN usuarios ON clientes.IdUsuario = usuarios.IdUsuario";
      $result = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($result)){
      ?>
        <tr>
          <td><?php echo $id = $row['IdClientes'] ?></td>
          <td><?php echo $row['NombreCliente'] ?></td>
          <td><?php echo $row['ApellidoCliente'] ?></td>
          <td><?php echo $row['Nit'] ?></td>
          <td><?php echo $row['Direccion'] ?></td>
          <td><?php echo $row['NombreUsuario'] ?></td>
          </td>
          <th>
            <a href="" class="btn btn-success btn-lg"> Editar</a>
            <a href="" class="btn btn-success btn-lg"> Eliminar</a>
          </th>
        </tr>
      <?php  }?>
    </tbody>
  </table>
</div>

<?php include_once("../include/fooder.php") ?>