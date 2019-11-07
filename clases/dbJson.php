<?php

class DbJson extends Db 
{
    private $json;


    function __construct($file)
    {
        $this->json = file_get_contents($file);
    }

    public function nextId()
    {
        $usuarios = json_decode($this->json, true);

        $lastUser = array_pop($usuarios['usuarios']);
        $lastId = $lastUser['id'];

        return $lastId + 1;
    }

    public function guardarUsuario($user)
    {
        $usuarios = json_decode($this->json, true);

        $usuarioEnArray = [
            "id" => $user->getId(),
            "nombre" => $user->getNombre(),
            "apellido" => $user->getApellido(),
            "email" => $user->getEmail(),
            "password" => $user->getPassword(),
            "avatar" => $user->getAvatar(),
        ];

        $usuarios['usuarios'][] = $usuarioEnArray;

        $this->json = json_encode($usuarios, JSON_PRETTY_PRINT);
        file_put_contents("db.json", $this->json);
    }


    public function buscarUsuarioPorEmail($email)
    {
        $usuarios = json_decode($this->json, true);

        foreach ($usuarios['usuarios'] as $usuario) {
            if ($usuario['email'] === $email) {
                return $usuario;
            }
        }
        return null;
    }

    public function existeUsuario($email)
    {
        return $this->buscarUsuarioPorEmail($email) !== null;
    }

    public function usuariosRegistrados()
    {
        $data = json_decode($this->json, true);
        $usuarios = $data['usuarios'];

        return $usuarios;
    }
}
