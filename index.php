<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body class="bg-black">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mira Mar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#inicio">Inico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#precios">Precio</a>
        </li>
      </ul>
    </div>
    <div class="row justify-content-end">
        <a class="btn btn-outline-success" href="Login.php">Inicio de sesion</a>
    </div>
  </div>
</nav>
    <div class="container-lg my-4" id="inicio">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        </div>
    </div>

    <div class="container-lg my-6" id="servicios">
    <div class="card-group">
  <div class="card">
    <img src="img/Card-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Vista al mar</h5>
      <p class="card-text">Disfruta del hermoso y relajante paisaje desde el balcón de nuestras habitaciones, ya sea para apreciar un vigorizante amanecer o un romántico ocaso. ¡No te arrepentirás!</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/Card-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Instalaciones Cinco Estrellas</h5>
      <p class="card-text">Además de la impresionante vista al mar, disfruta de nuestras instalaciones que ofrecen comodidad y lujo al mejor estilo que te mereces.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/Card-3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">¡Lujo, Diversión y Relajación!</h5>
      <p class="card-text fs-4">¿Cansado de explorar los alrededores? Te ofrecemos servicio de spa, donde podrás relajarte. ¿Hambriento? ¡No te preocupes! Contamos con un restaurant cinco estrellas con los mejores platillos a tu disposición.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
    </div>

    <div class="container-lg my-4" id="precios">
    <div class="card mb-4" style="max-width: 940px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/Money-1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h1 class="card-title">Comida</h1>
            <p class="card-text fs-4">Ecónomica y sabrosa, visita nuestro restaurante y pide el menú del día. ¡Descubre deliciosas sorpresas y promociones.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
    </div>
    </div>
    </div>

    <div class="container-lg my-5">
    <div class="card mb-4" style="max-width: 940px;">
    <div class="row g-0">
        <div class="col-md-8">
        <div class="card-body">
            <h1 class="card-title">Servicios a tu Alcance.</h1>
            <p class="card-text fs-4">Accesible y al alcance de tu bolsillo, permítete disfrutar de los servicios que ofrecemos en el spa y nuestro exclusivo servicio de jacuzzi..</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        <div class="col-md-4">
        <img src="img/Money-2.jpg" class="img-fluid rounded-start" alt="...">
        </div>
    </div>
    </div>
    </div>

    <div class="container-lg my-4">
    <div class="card mb-4" style="max-width: 940px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/Money-3.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h1 class="card-title">¡Los Mejores Precios!</h1>
            <p class="card-text fs-4">¡Te ofrecemos la mejor calidad, los precios mas competitivos en el mercado y la calidad más alta. ¡Disfruta de las mejores vacaciones que la vida puede ofrecer!</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
    </div>
    </div>
    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>