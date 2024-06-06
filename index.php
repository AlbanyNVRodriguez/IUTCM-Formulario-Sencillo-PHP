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
    
    <form action="./mostrar.php" method="POST">
        <h1>Formulario</h1>
        <img width="100px" margin="20px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" alt="logo php">
        <input type="text" name="nombre" placeholder="Nombre" title="Solo texto [3, 15]" pattern="[a-zA-z]{3,15}" required>
        <input type="text" name="apellido" placeholder="Apellido" title="Solo texto [3, 15]" pattern="[a-zA-z]{3,15}" required>
        <input type="email" name="correo" placeholder="jhondoe@gmail.com" required>
        <input type="tel" name="telefono" placeholder="04261236544" title="Solo numeros - [11]" pattern="[0-9]{11,11}" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>