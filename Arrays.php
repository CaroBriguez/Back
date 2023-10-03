<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = ["juan", "rosa",324,true];
    print($nombre[2]);
    print "<pre>\n";
    print($nombre[1]);

    $person = [
        'nombre'=>"carolina", 
        'apellido'=> "Briguez",
        'edad'=> 21,
    ];
    print "<pre>\n";
    print($person["apellido"]);

    ?>
</body>
</html>