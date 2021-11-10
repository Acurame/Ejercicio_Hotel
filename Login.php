<?php include("Model/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.css">
    <title>Document</title>
</head>
<body>
    
    <div class="banner-image-Registro w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class=" login">
        <form action="validar.php" method="post">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-white">INGRESO</h1>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario..." aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-file-earmark-lock"></i></span>
                        <input type="password" class="form-control" name="contraseña" placeholder="Contraseña..." aria-label="Username" aria-describedby="basic-addon1">
                    </div>
    
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" name="save" class="btn-block btn btn-outline-success" value="Ingresar">
                    </div>
                    </div>

                </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/node_modules/sweetalert2/dist/sweetalert2.js"></script>
    
</body>
</html>