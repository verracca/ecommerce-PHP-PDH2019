<?php
session_start();
session_destroy();
//Eliminar cookies en caso de que existan;
setcookie("email", "", -1);

header("Location:index.php");
exit;
