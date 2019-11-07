<?php

class DbMysql extends Db
{

  private $dbMysql;

  function __construct()
  {
    $config = file_get_contents("config.json");
    $configArray = json_decode($config, true);

    $host = $configArray['host'];
    $dbname = $configArray['dbname'];
    $port = $configArray['port'];

    $dsn = "mysql:host=$host;dbname=$dbname;port=$port";
    $user = $configArray['user'];
    $pass = $configArray['password'];

    try {
      $this->dbMysql = new PDO($dsn, $user, $pass); //Resuelve la conexión.
      $this->dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para poder ver en php los errores que devuelva SQL

    } catch (\Exception $e) {
      echo "Hubo en error. Mensaje: ";
      var_dump($e->getMessage());
    }
  }

  public function guardarUsuario($usuario)
  {

    $stmt = $this->dbMysql->prepare("INSERT INTO usuarios VALUES(default, :nombre, :apellido, :email, :password, :avatar)");

    $stmt->bindValue(":nombre", $usuario->getNombre());
    $stmt->bindValue(":email", $usuario->getEmail());
    $stmt->bindValue(":password", $usuario->getPassword());
    $stmt->bindValue(":apellido", $usuario->getApellido());
    $stmt->bindValue(":avatar", $usuario->getAvatar());

    $stmt->execute();
  }

  public function buscarUsuarioPorEmail($email)
  {

    $stmt = $this->dbMysql->prepare("SELECT * FROM usuarios WHERE email = :email");

    $stmt->bindValue(":email", $email);
    $stmt->execute();

    $usuarioArray = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($usuarioArray) {
      $usuario = new Usuario($usuarioArray, $usuarioArray['avatar']);
    } else {
      $usuario = null;
    }
    return $usuario;
  }

  public function existeUsuario($email)
  {
    return $this->buscarUsuarioPorEmail($email) !== null;
  }

  /* Este metodo nos va a servir cuando hagamos la lista de productos.
          public function usuariosRegistrados(){
            // TODO: para ustedes. Hacer un SELECT de todos los usuarios y mostrarlos en la vista.
          }

          */
}
