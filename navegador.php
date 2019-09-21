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
        <li class="nav-item d-sm-block d-lg-none">
          <a class="dropdown-item nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="#">Iniciar sesión</a>
        </li>
        <li class="nav-item d-sm-block d-lg-none">
          <a class="dropdown-item nav-link" data-toggle="modal" data-target="#exampleModalCenter2" href="#">Registrarme</a>
        </li>
        <li class="nav-item d-sm-block d-md-none d-lg-none">
          <a class="dropdown-item nav-link"href="#">Carrito</a>
        </li>
      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0 font-weight-bold d-none d-lg-block buscador">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar productos" aria-label="Search">
      <button class="btn btn-sm btn-light my-2 my-sm-0 " type="submit">Buscar</button>
    </form>
    <div class="img d-none d-md-block">
      <a href="" class="text-decoration-none imagenesnav"><img src="images/carrito.png" alt="Carrito"></a>
      <div class="btn-group text-decoration-none imagenesnav">
        <button id="btnGroupDrop1" type="button" class="btn btn-link text-decoration-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="imagenesnav d-lg-block d-md-none" src="images/user.png" alt="Usuario"></button>
        <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter" href="#">Iniciar sesión</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter2" href="#"> Registrarme </a>
        </div>
      </div>
    </div>
    <span class="img">
      <a href="" class="text-decoration-none d-block d-lg-none"><img src="images/busqueda.png" alt="Busqueda"></a>
    </span>
  </nav>
</header>

<!--Modal-->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <form class="container shadow-lg p-3 mb-5 bg-white rounded">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="nombre@ejemplo.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="InputPassword1" placeholder="Contraseña">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="Check1">
            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            <button type="button" class="btn btn-primary">Iniciar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <form class="container shadow-lg p-3 mb-5 bg-white rounded">
          <div class="form-row ">
            <div class="form-group  col-sm-6 col-md-12 col-lg-6 ">
              <label for="inputName">Nombre</label>
              <input type="text" class="form-control" id="inputName" placeholder="Nombre">
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="input2Name">Apellido</label>
              <input type="text" class="form-control" id="input2Name" placeholder="Apellido">
            </div>
            <div class="form-group col-sm-6 col-md-12 col-lg-12">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="nombre@ejemplo.com">
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="inputPassword42">Confirmar contraseña </label>
              <input type="password" class="form-control" id="inputPassword42" placeholder="Confirmar contraseña">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
              <button type="button" class="btn btn-primary">Registrarme</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
