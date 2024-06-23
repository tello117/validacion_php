<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['nombre'];
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];

    echo "ok : " .htmlespeialchars($name). "<br>";
    echo "TE enviaremos un correo a : ". htmlspecialchars($email) . "<br>";
}
//tipos de datos php "string", int, float, bool tipos de datos escalarres
// variable al lenguaje: $_
?>