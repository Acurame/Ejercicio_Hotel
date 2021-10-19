<?php 
    include_once("./conexion.php");
   

    $sql="SELECT *  FROM habitaciones";
    $query=mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Habitaciones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese Datos de Habitaciones</h1>
                                <form action="insertar.php" method="POST">

         
                                    <input type="text" class="form-control mb-3" name="NumeroHabitacion" placeholder="Numero de habitacion">
                                    <input type="text" class="form-control mb-3" name="DescripcionHabitacion" placeholder="Descripcion de habitacion">
                                    <input type="text" class="form-control mb-3" name="PrecioHabitacion" placeholder="Precio de habitacion">
                                    <input type= "file" REQUIRED name="imagenHabitacion"/><br/><br/>                                   
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                 
                                        <th>NumeroHabitacion</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                        
                                                <th><?php  echo $row['NumeroHabitacion']?></th>
                                                <th><?php  echo $row['DescripcionHabitacion']?></th>
                                                <th><?php  echo $row['PrecioHabitacion']?></th>
                                                <td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenHabitacion']); ?>"/></td>   
                                                <th><a href="actualizar.php?id=<?php echo $row['NumeroHabitacion'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NumeroHabitacion'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>