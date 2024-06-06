<?php
    if(!isset($_POST["submit"])){
        header("Location: ./index.php");
        exit();
    }

    $info = array(
        "nombre" => filter_var($_POST["nombre"], FILTER_SANITIZE_STRING),
        "apellido" => filter_var($_POST["apellido"], FILTER_SANITIZE_STRING),
        "correo" => filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL),
        "telefono" => $_POST["telefono"]
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://import.cdn.thinkific.com/371124%2Fcustom_site_themes%2Fid%2FrJAsQ7g9RuKVxUy61GbS_Recurso_11%402x.png" type="image/x-icon">
    <title>IUTCM - Lenguaje III - Formulario PHP</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="info">
        <h1>Bienvenido</h1>
        <img src="https://cdn-icons-png.flaticon.com/512/4042/4042171.png" alt="user">
        <p>Nombre: <strong><?= $info["nombre"]?></strong></p>
        <p>Apellido: <strong><?= $info["apellido"]?></strong></p>
        <p>Correo: <strong><?= $info["correo"]?></strong></p>
        <p>Telefono: <strong><?= $info["telefono"]?></strong></p>
        <a href="./index.php" >Regresar</a>
    </div>
</body>
</html>