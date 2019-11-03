<?php

class Usuario
{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;

    function __construct(array $datos)
    {
        global $json;

        if (isset($datos['id'])) {
            $this->id = $datos['id'];
            $this->password = $datos['password'];
        } else {
            $this->id = $json->nextId();
            $this->password = password_hash($datos['password'], PASSWORD_DEFAULT);
        }
        $this->nombre = $datos['nombre'];
        $this->apellido = $datos['apellido'];
        $this->email = $datos['email'];
    }


    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
}
