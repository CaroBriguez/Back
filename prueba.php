<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1> Primera Pagina</h1>
<?php
// Ejercicio 1,2
    $saludo = "Hola Mundo. <br><br>";
    echo $saludo;
//Ejercicio 3 operaciones suma
    $pan = 700;
    $queso = 380;
    $jamon = 420;
//suma
    $totalSanguche = $pan+$queso+$jamon;
    echo "EL TOTAL DEL SANGUCHE ES: $totalSanguche <br> <br>";
//resta
    $totalJamonQueso = $jamon-$queso;
    echo "La resta del jamon y el queso es:  $totalJamonQueso <br> <br> ";
//Multiplicacion
    $totalPan = $pan*2;
    echo "El precio de los 2 kg de pan es de: $totalPan <br> <br>";
//Division
    $totalSangucheDos = $totalSanguche/2;
    echo "SI DIVIDIMOS EL SANGUCHE EN 2, CADA UNO DEBE PAGAR: $ $totalSangucheDos <br> <br>";
//Resto de Division 
    $divisorPersonas = 3;
    $resto = $totalSanguche % $divisorPersonas;
    echo "EL RESTO DE LA DIVISION DEL SANGUCHE ENTRE 3 ES: $resto <br> <br>";
//Ejercicio 4 transformacion de celcius a Fahrenheit, 20C
    $gradosC = 20; 
    $convercionF = ($gradosC*9/5) + 32;
    echo "$gradosC  GRADOS CELCIUS SON EQUIVALENTES A:  $convercionF <br> <br> ";
//EJERCICIO 5 ALgoritmos
//Ejercico A Perimetro y Area de rectangulo
    $base = 18;
    $altura = 12;
    $perimetroR = $base + $altura;
    $areaR = $base * $altura;

    echo "<p>EL AREA DEL RECTANGULO ES DE: $areaR  Y SU PERIMETRO ES DE: $perimetroR </p>\n";
// Ejercicio B Perimtero y area del circulo
    $radio = 30;
    $areaC = (($radio**2) * M_PI);
    $diametro = $radio *2;
    $perimetroC = M_PI * $diametro;

    echo "El AREA DEL CIRCULO ES DE: $areaC, Y SU PERIMETRO ES DE $perimetroC <br> <br> ";

?>
</body>
</html>