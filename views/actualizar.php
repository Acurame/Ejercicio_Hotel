<?php 
    include("conexion.php");
  

$NumeroHabitacion=$_GET['NumeroHabitacion'];

$sql="SELECT * FROM habitaciones WHERE NumeroHabitacion='$NumeroHabitacion'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="NumeroHabitacion" value="<?php echo $row['NumeroHabitacion']  ?>">

                                    <input type="text" class="form-control mb-3" name="DescripcionHabitacion" value="<?php echo $row['DescripcionHabitacion']  ?>">
                                    <input type="text" class="form-control mb-3" name="PrecioHabitacion" value="<?php echo $row['PrecioHabitacion']  ?>">
                                    <input type= "file" REQUIRED name="imagenHabitacion" value="<?php echo $row['imagenHabitacion']  ?>"><br/><br/>    
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>