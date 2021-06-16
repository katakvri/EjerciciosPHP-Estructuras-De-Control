<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    if ($edad > 18) {
        echo "La persona de nombre $nombre y de $edad años es mayor de edad";
    } else {
        echo "La persona de nombre $nombre y de $edad años es menor de edad";
    }
    ?>
</body>
</html>