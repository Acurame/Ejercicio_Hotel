
<?php include_once("./include/headerUsuari.php") ?>
<?php include_once("./Model/db.php") ?>

<div class="container-lg my-4 " style="padding-top: 5%">
<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php
  $consult = "SELECT * FROM habitaciones";
  $result = mysqli_query($conexion,$consult);
  
  while($row = mysqli_fetch_array($result)){?>
    <div class="col container-col">
        <div class="card">
            <img src="/img/imagenes_abitaciones/<?php echo $row['imagenHabitacion']?>" class="card-img-top imgCard" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['NumeroHabitacion']?></h5>
                <p class="card-text"><?php echo $row['DescripcionHabitacion']?></p>
                <p class="card-text">Q <?php echo $row['PrecioHabitacion']?></p>
                <div class="d-grid gap-2 d-md-block col-6  mx-auto">
                  <a href="#" class="btn btn-primary btn-lg">Comprar</a>
                  <a href="/views/informacionHabitacion.php?id=<?php echo $row['IdHabiatciones']?>" class="btn btn-primary btn-lg"> Ver</a>
                </div>
            </div>
        </div>
    </div>
  <?php } ?>
</div>
</div>


<?php include_once("./include/fooder.php") ?>
