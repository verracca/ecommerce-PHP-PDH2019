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

        <?php if (usuarioLogueado()): ?>
          <li class="nav-item d-sm-block d-lg-none">
            <a class="dropdown-item nav-link" href="logout.php">Cerrar sesión</a>
          </li>
          <li class="nav-item d-sm-block d-lg-none">
            <img class="avatar" src="avatar/<?= $usuario['nombre'] ?>.jpg" alt="<?= $usuario['nombre'] ?>">
            <span>Hola: <?= $usuario['nombre'] ?></span>
          </li>
        <?php else :?>
        <li class="nav-item d-sm-block d-lg-none">
          <a class="dropdown-item nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="#">Iniciar sesión</a>
        </li>
        <li class="nav-item d-sm-block d-lg-none">
          <a class="dropdown-item nav-link" data-toggle="modal" data-target="#exampleModalCenter2" href="#">Registrarme</a>
        </li>
      <?php endif ?>
        <!-- Termina condicional -->
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
          <?php if (usuarioLogueado()): ?>
            <li class="dropdown-item">
              <img class="avatar" src="avatar/<?= $usuario['nombre'] ?>.jpg" alt="<?= $usuario['nombre'] ?>">
              <span>Hola <?= $usuario['nombre'] ?></span>
            </li>
          <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
        <?php else: ?>
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter" href="#">Iniciar sesión</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter2" href="#"> Registrarme </a>
          <?php endif; ?>
          <!-- termina condicional -->
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
        <form class="container shadow-lg p-3 mb-5 bg-white rounded" name="login" action="index.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="nombre@ejemplo.com" name="email">
            <small id="emailHelp" class="form-text text-danger">
            <?php if(isset($erroresLogin['email'])) :?>
              <?= $erroresLogin['email'] ?>
            <?php endif ?>
            </small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="InputPassword1" placeholder="Contraseña"name="password">
            <small id="emailHelp" class="form-text text-danger">
            <?php if(isset($erroresLogin['password'])) :?>
              <?= $erroresLogin['password'] ?>
            <?php endif ?>
            </small>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="Check1"name="recordarme">
            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Iniciar</button>
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
        <form class="container shadow-lg p-3 mb-5 bg-white rounded" action="index.php" method="post" enctype="multipart/form-data" name="registro">
          <div class="form-row ">
            <div class="form-group  col-sm-6 col-md-12 col-lg-6 ">
              <label for="inputName">Nombre</label>
              <?php if (!isset($erroresRegistro["nombre"])):?>
                <input type="text" class="form-control" id="inputName" placeholder="Nombre" name = "nombre" value="<?= $nombreOk ?>">
              <?php else: ?>
              <input type="text" class="form-control" id="inputName" placeholder="Nombre" name = "nombre" value="">
            <?php endif ?>
            <small id="emailHelp" class="form-text text-danger">
            <?php if(isset($erroresRegistro['nombre'])) :?>
              <?= $erroresRegistro['nombre'] ?>
            <?php endif ?>
            </small>
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="input2Name">Apellido</label>
              <?php if (!isset($erroresRegistro["nombre"])):?>
              <input type="text" class="form-control" id="input2Name" placeholder="Apellido" name ="apellido" value= "<?= $apellidoOk ?>" >
              <?php else: ?>
              <input type="text" class="form-control" id="input2Name" placeholder="Apellido" name ="apellido" >
            <?php endif ?>
            <small id="emailHelp" class="form-text text-danger">
            <?php if(isset($erroresRegistro['apellido'])) :?>
              <?= $erroresRegistro['apellido'] ?>
            <?php endif ?>
            </small>
            </div>
            <div class="form-group col-sm-6 col-md-12 col-lg-12">
              <label for="inputEmail4">Email</label>
              <?php if (!isset($erroresRegistro["email"])):?>
              <input type="email" class="form-control" id="inputEmail4" placeholder="nombre@ejemplo.com" name ="email" value="<?= $emailOk  ?>">
              <?php else: ?>
              <input type="email" class="form-control" id="inputEmail4" placeholder="nombre@ejemplo.com" name ="email">
            <?php endif ?>
            <small id="emailHelp" class="form-text text-danger">
            <?php if(isset($erroresRegistro['email'])) :?>
              <?= $erroresRegistro['email'] ?>
            <?php endif ?>
            </small>
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" name = "password">
              <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($erroresRegistro['password'])) :?>
                <?= $erroresRegistro['password'] ?>
              <?php endif ?>
              </small>
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="inputPassword42">Confirmar contraseña </label>
              <input type="password" class="form-control" id="inputPassword42" placeholder="Confirmar contraseña" name="retypePassword">
              <small id="emailHelp" class="form-text text-danger">
                <?php if(isset($erroresRegistro['retypePassword'])) :?>
                  <?= $erroresRegistro['retypePassword'] ?>
                <?php endif ?>
              </small>
            </div>
            <div class="form-group">
              <label for="avatar">Imagen de perfil</label>
              <input name="avatar" type="file" id="avatar" class="form-control-file">
              <small id="emailHelp" class="form-text text-danger">
                <?php if(isset($erroresRegistro['avatar'])) :?>
                  <?= $erroresRegistro['avatar'] ?>
                <?php endif ?>
              </small>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-primary">Registrarme</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
