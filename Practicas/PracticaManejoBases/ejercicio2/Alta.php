<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("conection.inc");
    //Captura datos desde el Form anterior
    $ciudad = $_POST['Ciudad'];
    $pais = $_POST['Pais'];
    $habitantes = $_POST['Habitantes'];
    $superficie = $_POST['Superficie'];
    $hayMetro = $_POST['hayMetro'];
    //Inserta en la tabla ed datos
    $query = "INSERT INTO capitales (ciudad, pais, habitantes, superficie , tieneMetro)
    values ('$ciudad','$pais', '$habitantes', '$superficie', '$hayMetro')";
    mysqli_query($link, $query) or die (mysqli_error($link));
    echo("La ciudad fue registrada con éxito");
    echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>
</html>