<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("conection.inc");
        //Captura datos desde el Form anterior
        $ciudad = $_POST['Ciudad'];
        $pais = $_POST['Pais'];
        $habitantes = $_POST['Habitantes'];
        $superficie = $_POST['Superficie'];
        $hayMetro = $_POST['hayMetro'];
        $id=$_POST['id'];
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "UPDATE capitales set ciudad='$ciudad', pais='$pais', habitantes='$habitantes', superficie='$superficie' , tieneMetro='$hayMetro' where
        id='$id'";
        mysqli_query($link,$vSql) or die (mysqli_error($link));
        echo("La ciudad fue Modificada<br>");
        echo("<A href= 'ejercicio2.php'>Volver al Menu del ABM</A>");
        // Cerrar la conexion
        mysqli_close($link);
    ?>

</body>
</html>