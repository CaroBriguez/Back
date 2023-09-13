<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 2</title>
</head>
<body>
    <h1>Trabajo Practico 2</h1>
    <?php
    //1. Crear una variable n y validar que sea un número positivo.
//2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
///3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
///4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
//mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
//mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
//numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales.

    echo "Ejercicio 1 <br> <br>";
    $num = 7 ;
    if ($num > 0) {
        echo "El numero es POSITIVO <br> <br>";
    }
    elseif ($num < 0) {
        echo "El numero es NEGATIVO <br> <br>";
    } 
    else {
        echo "El numero es 0 <br> <br>";
    }
    
    
    echo "Ejercicio 2 <br> <br>";
    $num2 = 1;

    if ($num2 > 1 &  $num2 < 10) {
        echo "EL NUMERO ES MAYOR A 1 Y MENOR A 10 <br> <br>";
    }
    else {
        echo "El numero NO ESTA ENTRE 2 Y 9 <br> <br>";
    }
    echo "Ejercicio 3 <br> <br>";

    $num3 = 1 ;
    if ($num3 > 10 ||  $num3 < 2) {
        echo "EL NUMERO ES MAYOR A 10 O MENOR A 2 <br> <br>";
    }
    else {
        echo "El numero NO ES MENOR A DOS NI MAYOR A 10 <br> <br>";
    }

    echo "Ejercicio 4 <br> <br>";
    $numero1 = 2;
    $numero2 = 1;

    if ($numero1 > $numero2) {
        $suma1 = $numero1 + $numero2; 
        $resta1 = $numero1 + $numero2;
        echo "Numero 1 ES MAYOR que Numero 2 <br> <br>";
        echo "La suma es : $suma1 <br> <br>";
        echo "La resta es : $resta1 <br> <br>";
    }
    elseif ($numero2 > $numero1 ) {
        $multi = $numero1 * $numero2;
        $division = $numero1 / $numero1;
        $resto = $numero1 % $numero2;
        echo "Numero 2 ES MAYOR que Numero 1 <br> <br>";
        echo "La multiplicacion es: $multi <br> <br>";
        echo "La division es: $division <br> <br>";
        echo "El resto es: $resto <br> <br>";
    }
    else {
        echo "Los números ingresados son iguales <br> <br>";
    }


    ?>
</body>
</html>