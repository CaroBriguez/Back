<?php

$usuario = $_POST ["usuario"];

$contrasena = $_POST["contrasena"];


$checkU = "admin";
$checkC = 1234;

if ($usuario == $checkU && $contrasena == $checkC) {
    header("location: https://www.potrerodigital.org/");
}
else{
    header("location:index.html");
}




?>