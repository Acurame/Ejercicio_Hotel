<?php include("Model/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

    

    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form action="validar.php" method="post">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-dark">INGRESO</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                    <p>Usuario <input type="text" class="form-control" placeholder="Ingrese su Usuario" name="usuario"></p>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                    <p>Contraseña <input type="text" class="form-control" placeholder="Ingrese su Contraseña" name="contraseña"></p>
                    </div>

                 
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" name="save" class="btn btn-block ingresar" value="Ingresar">
                    </div>
                  
                    </div>
                   
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/node_modules/sweetalert2/dist/sweetalert2.js"></script>
    
</body>
</html>