
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
                <h5 class="modal-title">Crear Factura</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../Model/Factura/Crear.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" NameClient="NameClient" id="" aria-describedby="helpId" placeholder="NameClient">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" ApellidClient="ApellidClient" id="" aria-describedby="helpId" placeholder="ApellidClient">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" Nit="Nit" id="" aria-describedby="helpId" placeholder="Nit">
                    </div>
                      <select class="form-control" name="Direccion" id="">
                        <?php 
                            $query = "SELECT * FROM clientes";
                            $result = mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_array($result)){
                            if($row['rol'] != 4){
                        ?> 
                        <option value="<?php echo $row['IdClientes'] ?>"><?php echo $row['NombreCliente'] ?></option>
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
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nit</th>
        <th>Direccion</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT IdClientes, NombreCliente, ApellidoCliente FROM clientes";
      $result = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($result)){
      ?>
        <tr>
          <td><?php echo $id = $row['IdCliente'] ?></td>
          <td><?php echo $row['NombreCliente'] ?></td>
          <td><?php echo $row['ApellidoCliente'] ?></td>
          <td><?php echo $row['NombreEmpleado'] ?></td>
          <th>
            <a href="../Model/Factura/Editar.php?id=<?php echo $row['IdCliente'] ?>" class="btn btn-warning btn-lg"> Editar</a>
            <a href="" class="btn btn-danger btn-lg"> Eliminar</a>
          </th>
        </tr>
      <?php  }?>
    </tbody>
  </table>
</div>

<?php include_once("../include/fooder.php") ?>