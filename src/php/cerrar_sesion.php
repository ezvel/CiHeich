<?php

session_start();
session_destroy();

setcookie("NOMBRE", "");
setcookie("APELLIDO", "");

header("location:../../index.php");

?>