<?php
include "functions.php";

include "init.php";



if (!$auth->usuarioLogueado()) {
    header("Location:index.php");
    exit;
}

if (isset($_COOKIE['email'])) {
    //Si está seteada la cookie es porque el usuario tildó recordarme. Vamos a loguerarlo desde la cookie.
    loguearUsuario($_COOKIE['email']);
}

if ($auth->usuarioLogueado()) {
    $usuario = $db->buscarUsuarioPorEmail($_SESSION['email']);
    $usuarios = $db->usuariosRegistrados();
    // var_dump($usuarios);
    // exit;
}
