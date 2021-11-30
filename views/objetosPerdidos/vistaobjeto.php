<?php include_once("../../assets/header.php") ?>
<?php include_once("../../Model/db.php") ?>
<div class="container-lg my-4" style="padding-top: 5%">
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success btn-lg" data-bs-toggle="modal" data-bs-target="#Crear">
  Crear
</button>

<!-- Modal -->
<div class="modal fade" id="Crear" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Aviso Objeto Perdido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../Model/objeto/vistaobjeto.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Nombre del objeto">
                    </div>
                    
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="passwd" id="" aria-describedby="helpId" placeholder="Descripcion">
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
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT IdObjetos, nombre, descripcion FROM objetoolvidados";
      $result = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($result)){
      ?>
        <tr>
          <td><?php echo $id = $row['IdObjetos'] ?></td>
          <td><?php echo $row['nombre'] ?></td>
          <td><?php echo $row['descripcion'] ?></td>
          </td>
          <th>
            <a href="" class="btn btn-warning btn-lg"> Editar</a>
            <a href="" class="btn btn-danger btn-lg"> Eliminar</a>
          </th>
        </tr>
      <?php  }?>
    </tbody>
  </table>
</div>

<?php include_once("../../assets/fooder.php") ?>