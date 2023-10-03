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
    //almacenar los primeros 10 numeros pares y mostrarlos por pantalla uno abajo de otro
    $numPares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];


    foreach ($numPares as $numPares) {
        print "<pre>\n";
        print($numPares);
        print "<pre>\n";
    }

    print "<pre>\n";
    print "<p>Ejercicio 2</p>\n";
    //Poner valores, Pedro, Ana, 34, 1, mostrar print_r
    $random = ["Pedro","Ana",34,1];

    print_r($random);
    
    print "<p>Ejercicio 3</p>\n";

    $asociativo = ['nombre'=>"Pedro",'apellido'=>"Torres",'dirección'=>"Av Mayor 3703", 'telefono'=> 1122334455];

    print "<p>Ejercicio 4</p>\n";

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];

    foreach($ciudades as $i => $j){
        print "<pre>\n";
        print("La ciudad con el indice: $i tiene el nombre: $j");
        print "<pre>\n";
    }
    print "<pre>\n";
    print "<p>Ejercicio 5</p>\n";
    $citys = ['MD'=>"Madrid",'BCL'=> "Barcelona",'LD'=> "Londres",'NY'=> "New York", 'LA'=>"Los Angeles",'CCG'=>"Chicago"];
    foreach($citys as $i => $j){
        print "<pre>\n";
        print("La ciudad con el indice: $i tiene el nombre: $j");
        print "<pre>\n";
    }
    ?>
</body>

</html>