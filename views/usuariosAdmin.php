
<?php include_once("../include/headerUsuari.php") ?>
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
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Nombre de Usuario">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Contrasña">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Confirmacion de contraseña">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Correo electronico">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <select class="form-control" name="" id="">
                        <option>Administrador</option>
                        <option>Personal</option>
                        <option>Usuario</option>
                      </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

</div>

<?php include_once("../include/fooder.php") ?>
