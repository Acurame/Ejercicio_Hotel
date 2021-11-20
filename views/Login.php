<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Inicio de sesión</title>
</head>
<body class="bg-black">
    
    <section>
        <div class="row">
            <div class="col-lg-7 min-vh-100 img-login">
            </div>
            <div class="col-lg-5 d-flex flex-column aling-items-end min-vh-100 ">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <label for="Hotel MiraMar S.A" class="text-white fs-2 logo">Hotel MiraMar S.A</label>
                </div>
                <div class="text-white text-center px-lg-5 py-lg-4 p-4 w-100 aling-self-center">
                    <h1 class="mb-4">Bienvenido a Hotel Mira Mar S.A</h1>
                    <form action="../controlador/validar.php" method="post" class="mb-5">
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                            <input type="text" class="form-control" placeholder="Mi Usuario.." name="usuario" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                            <input type="text" class="form-control" placeholder="Mi Contraseña.." name="contraseña" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                      
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn btn-outline-light flex-grow-1 mr-2">Ingresar</button>
                            <a href="../index.php" class="btn btn-outline-light flex-grow-1 ml-2">Canselar</a>
                        </div>
                    </form>
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                    <a href="./registrar.php" class="text-white text-decoration-none">¿todabia no tienes una cuenta? crea una ahora</a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>