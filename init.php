<?php

include "clases/db.php";
include "clases/dbmysql.php";
include "clases/dbJson.php";
include "clases/usuario.php";
include "clases/auth.php";
include "clases/validador.php";

$data = "db.json";
$auth = new Auth;
// $db = new DbJson($data);
$db = new DbMysql()
?>