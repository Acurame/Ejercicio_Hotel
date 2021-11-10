<?php include_once("../include/headerAdmin.php") ?>
<?php include_once("../Model/db.php") ?>
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
                <h5 class="modal-title">Insertar Habitacion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../Model/Habitaciones/Create.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="Numero" id="" aria-describedby="helpId" placeholder="Numero">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="Descipcion" id="" aria-describedby="helpId" placeholder="Descripciónes">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="Precio" id="" aria-describedby="helpId" placeholder="Precio">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="file" class="form-control" name="img" id="" aria-describedby="helpId" placeholder="Imagen">
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
        <th>Numero</th>
        <th>Descripcion</th>
        <th>Precios</th>
        <th>Imagen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT * FROM habitaciones";
      $result = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($result)){
      ?>
        <tr>
          <td><?php echo $id = $row['IdHabiatciones'] ?></td>
          <td><?php echo $row['NumeroHabitacion'] ?></td>
          <td><?php echo $row['DescripcionHabitacion'] ?></td>
          <td><?php echo $row['PrecioHabitacion'] ?></td>
          <td><img style="width: 20%;" src="/img/imagenes_abitaciones/<?php echo $row['imagenHabitacion'] ?>" alt="<?php echo $row['imagenHabitacion'] ?>"></td>
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

<?php include_once("../include/fooder.php") ?>