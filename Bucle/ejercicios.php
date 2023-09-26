<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
print "<p>Ejercicio 1</p>\n";
for ($i=1; $i <= 100; $i++) { 
    print "<p>$i</p>\n";
}

print "<p>Ejercicio 2</p>\n";
for ($i=100; $i >= 1; $i--) { 
    print "<p>$i</p>\n";
}

print "<p>Ejercicio 3</p>\n";
//numeros pares del 1 al 100
for ($i=1; $i <= 100; $i++) { 
    if($i % 2 == 0 )
    print "<p>$i</p>\n";
}

print "<p>Ejercicio 4</p>\n";
//Mostrar los números impares del 1 al 100.
for ($i=1; $i <= 100; $i++) { 
    if($i % 2 !== 0 )
    print "<p>$i</p>\n";
}

print "<p>Ejercicio 5</p>\n";
//Mostrar la suma de los números de 1 a 20.
$sumaNum = 0;
for ($i=1; $i <= 20; $i++) { 
    $sumaNum = $sumaNum + $i;
}
print "<p>La suma de los numeros es: $sumaNum</p>\n";


print "<p>Ejercicio 6</p>\n";
///Mostrar la suma de números pares de 1 a 20.
$sumaPar = 0;
for ($i=1; $i <= 20; $i++) { 
    if($i % 2 == 0 ){
        $sumaPar = $sumaPar + $i;
    }
    
}
print "<p>La suma de los numeros es: $sumaPar</p>\n";


?>
</body>
</html>