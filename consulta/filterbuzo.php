<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Tienda de ropa</h1>
    <p>La siguiente lista muestra los datos de buzos actualmente en stock.</p>
            
        <?php
        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tienda ropa");

        // 2) Preparar la orden SQL
        // Sintaxis SQL SELECT
        // SELECT * FROM nombre_tabla
        // => Selecciona todos los campos de la siguiente tabla
        // SELECT campos_tabla FROM nombre_tabla
        // => Selecciona los siguientes campos de la siguiente tabla

        $consulta = "SELECT * FROM ropa WHERE prenda='buzo'";

        // 3) Ejecutar la orden y obtenemos los registros
        $datos = mysqli_query($conexion, $consulta);

        // 4) Mostrar los datos del registro
        print "<pre>\n";?>

        <a href="./tp5.php">VOLVER</a>
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">PRENDA</th>
                        <th scope="col">MARCA</th>
                        <th scope="col">TALLE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">IMAGEN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($reg = mysqli_fetch_array($datos)) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $reg['id'] . "</th>";
                        echo "<td>" . $reg['prenda'] . "</td>";
                        echo "<td>" . $reg['marca'] . "</td>";
                        echo "<td>" . $reg['talle'] . "</td>";
                        echo "<td>" . $reg['precio'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
            </table>

            
</body>

</html>