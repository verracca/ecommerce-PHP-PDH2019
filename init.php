<?php

include "clases/dbJson.php";
include "clases/usuario.php";
include "clases/auth.php";
include "clases/validador.php";

$data = "db.json";
$auth = new Auth;
$json = new DbJson($data);
