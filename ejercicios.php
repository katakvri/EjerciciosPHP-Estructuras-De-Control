<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
<?php
// 1)
echo "Ejercicio 1: <br> <br>";
$min = 1;
$max = 3;
$randomInt = random_int($min, $max);
switch($randomInt) {
    case $randomInt == 1: 
        echo "uno";
        break;
    case $randomInt == 2:
        echo "dos";
        break;
    case $randomInt == 3:
        echo "tres";
        break;
}
echo "<hr>";
//2)
echo "Ejercicio 2: <br><br>";
echo "Tabla con el for: <br>";
$num = 2;
for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = ".$num*$i."<br>";
}
echo "<br>";
echo "tabla con el do while: <br>";
$x = 1;
do { 
    echo "$num x $x = ".$num*$x."<br>";
    $x++;
} while ( $x != 11 );
echo "<hr>";

//3)
echo "Ejercicio 3: <br><br>";


?>
</body>
</html>