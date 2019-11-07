<?php

abstract class Db
{
public abstract function guardarUsuario($usuario);
public abstract function buscarUsuarioPorEmail($email);
public abstract function existeUsuario($email);
public abstract function usuariosRegistrados();

}

 ?>
