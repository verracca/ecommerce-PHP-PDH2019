<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Service Nuñez</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #dc3545">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand font-weight-normal text-white" href="#">
        <img class="logo" src="images/logo.png" alt="logo">Service Nuñez</a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>

        </ul>
        <div class="img d-block d-md-none">
          <a href="" class="text-decoration-none"><img src="images/carrito.png" alt="Carrito"></a>
          <a href="" class="text-decoration-none" data-toggle="modal" data-target="#exampleModalCenter"><img src="images/user.png" alt="Usuario"></a>
        </div>
      </div>
      <form class="form-inline my-2 my-lg-0 font-weight-bold d-none d-lg-block">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar productos" aria-label="Search">
        <button class="btn btn-sm btn-light my-2 my-sm-0" type="submit">Buscar</button>
      </form>
      <div class="img d-none d-md-block">
        <a href="" class="text-decoration-none"><img src="images/carrito.png" alt="Carrito"></a>
        <a href="" class="text-decoration-none" data-toggle="modal" data-target="#exampleModalCenter"><img src="images/user.png" alt="Usuario"></a>
      </div>
      <span class="img">
        <a href="" class="text-decoration-none d-block d-lg-none"><img src="images/busqueda.png" alt="Carrito"></a>
      </span>
    </nav>
  </header>


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Iniciar Sesion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
          <button type="button" class="btn btn-primary">Iniciar</button>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 carouselimg" src="images/slider-11.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 carouselimg" src="images/slider-11.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 carouselimg" src="images/slider-11.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <section>
    <h1 class="text-center">CATEGORIAS</h1>
    <div class="d-flex flex-wrap justify-content-around linkscategorias">
      <a href="#"><img src="images/Categoria amarillo-05.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-06.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-07.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-08.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-09.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-10.png" alt="Heladeras" class="categoriasimg"></a>

    </div>

  </section>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>
