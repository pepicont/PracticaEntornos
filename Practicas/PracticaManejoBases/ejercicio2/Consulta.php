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
        $vSql = "SELECT * FROM capitales";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);
    ?>
    <table border="1">
        <tr>
        <td><b>id</b></td>
        <td><b>Ciudad</b></td>
        <td><b>Pais</b></td>
        <td><b>Habitantes</b></td>
        <td><b>Superficie</b></td>
        <td><b>¿Tiene Metro?</b></td>

        </tr>
        <?php
            while ($fila = mysqli_fetch_array($vResultado))
            {
        ?>
        <tr>
            <td><?php echo ($fila['id']); ?></td>
            <td><?php echo ($fila['ciudad']); ?></td>
            <td><?php echo ($fila['pais']); ?></td>
            <td><?php echo ($fila['habitantes']); ?></td>
            <td><?php echo ($fila['superficie']); ?></td>
            <td><?php echo ($fila['tieneMetro']); ?></td>
        </tr>
            <?php } ?>
        
    </table>
    <p>&nbsp;</p>
    <?php
            
            // Liberar conjunto de resultados
            mysqli_free_result($vResultado);
            // Cerrar la conexion
            mysqli_close($link);
        ?>
    <p align="center"><a href="ejercicio2.php">Volver al menu; del ABM</a></p>

</body>
</html>