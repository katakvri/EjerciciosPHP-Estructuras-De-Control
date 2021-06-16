<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    $nombre = $_REQUEST['nombre'];
    $radio_position = $_REQUEST['radio1'];
    switch ($radio_position) {
        case "sin-estudios":
            echo "$nombre no tiene estudios";
            break;
        case "estudios-primarios":
            echo "$nombre tiene solo estudios primarios";
            break;
        case "estudios-secunadarios":
            echo "$nombre tiene estudios secundarios";
            break;
    }
    ?>
</body>
</html>