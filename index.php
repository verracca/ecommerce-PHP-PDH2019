<?php
include "functions.php";

$nombreOk = "";
$emailOk = "";
$apellidoOk = "";

if(usuarioLogueado()){
  header("Location:index.php");
  exit;
}

$erroresRegistro = [];
$erroresLogin = [];




if(isset($_POST["retypePassword"])){
  $erroresRegistro = validarRegistro($_POST);
//El control lo hacemos en el campo input.
  $emailOk = trim($_POST['email']);
  $nombreOk = trim($_POST['nombre']);
  $apellidoOk = trim($_POST['apellido']);
  // var_dump($errores, $_POST, $nombreOk, isset($_POST["retypePassword"]));

  if(!$erroresRegistro){
    $usuario = crearUsuario();
    // var_dump($usuario);
    // exit;
    guardarUsuario($usuario); //Guardaremos en un archivo .json.–

    // var_dump($_FILES);
    // exit;
    $ext = pathinfo($_FILES["avatar"]['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["avatar"]['tmp_name'], "avatar/". $_POST['nombre']. "." . $ext);

    loguearUsuario($_POST['email']);

    // header("Location:index.php"); //Redirecciona.
    // exit; //Siempre después de una redirección.
  }


}
if($_POST && !isset($_POST["retypePassword"])){
  $erroresLogin = validarLogin($_POST);

  if(!$erroresLogin){
    loguearUsuario($_POST['email']); //Logueamos al usuario y lo mandamos logueado al home.

    header("Location:index.php");
    exit; //Siempre después de una redirección.

  }
}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./css/styles.css">
  <title>Service Nuñez</title>
  <link rel="SHORTCUT ICON" href="images/logomini.jpg" type="image/x-icon">
</head>

<body>
  <?php include "./navegador.php"; ?>
  <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 carouselimg" src="images/Slider+chico-13.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 carouselimg" src="images/Slider+chico-12.jpg" alt="Second slide">
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
  <h1 class="text-center">CATEGORIAS</h1>
  <section class="categorias">
    <div class="d-flex flex-wrap justify-content-around linkscategorias">
      <a href="#"><img src="images/Categoria amarillo-05.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-06.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-07.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-08.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-09.png" alt="Heladeras" class="categoriasimg"></a>
      <a href="#"><img src="images/Categoria amarillo-10.png" alt="Heladeras" class="categoriasimg"></a>

    </div>

  </section>



<br>
<br>
  <?php
  include "./footer.php";
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>
