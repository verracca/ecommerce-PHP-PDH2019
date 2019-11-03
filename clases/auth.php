<?php

class Auth
{

    function __construct()
    {
        session_start();
    }

    public function loguearUsuario($email)
    {
        $_SESSION['email'] = $email; //Nos falta iniciar la sesión. Colocamos session_start() al inicio de este archivo.

        if (isset($_POST['recordarme'])) {
            //Si el usuario tildó "recordarme" vamos a crear la cookie y guardar su email.
            setcookie("email", $email, time() + 60 * 60);
        }
    }

    public function usuarioLogueado()
    {
        return isset($_SESSION['email']);
    }
}
