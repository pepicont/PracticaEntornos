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
    $id = $_POST['id'];
    //Arma la instrucción SQL y luego la ejecuta
    $query = "SELECT * FROM capitales WHERE id ='$id' ";
    $vResultado = mysqli_query($link, $query) or die (mysqli_error($link));;
    $fila = mysqli_fetch_array($vResultado);
    if(mysqli_num_rows($vResultado) == 0) {
    echo ("Ciudad Inexistente...!!! <br>");
    echo ("<A href='FormModiIni.html'>Continuar</A>");
    }
    else{
?>
    <FORM action="Modi.php" method="POST" name="FormModi">
        <table width="356">
        <tr>
                <td width="103"> id: </td>
                <td width="243">
                    <input  type="text" name="id" value="<?php echo($fila['id']); ?>" readonly>
                </td>
            </tr>
            <tr>
                <td width="103"> Ciudad: </td>
                <td width="243"> <input type="text" name="Ciudad" value="<?php
                echo($fila['ciudad']); ?>">
                </td>
            </tr>
                <tr>
                <td width="103"> Pais: </td>
                <td width="243"> <input type="TEXT" name="Pais" size="20" maxlength="20"
                value="<?php echo($fila['pais']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Habitantes: </td>
                <td width="243"> <input type="number" name="Habitantes" size="20" max="999999"
                value="<?php echo($fila['habitantes']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Superficie: </td>
                <td width="243"> <input type="TEXT" name="Superficie" size="20" maxlength="40"
                value="<?php echo($fila['superficie']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> ¿Tiene Metro?: </td>
                <td width="243">
                    <select name="hayMetro" id="hayMetro">
                        <option value="1" <?php echo ($fila['tieneMetro'] == 1) ? 'selected' : ''; ?>>Si</option>
                        <option value="0" <?php echo ($fila['tieneMetro'] == 0) ? 'selected' : ''; ?>>No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
                value="Modificar">
                <p><a href="ejercicio2.php">Volver al menu del ABM</a></p>
                </td>
            </tr>
        </table>
    </FORM>
<?php
    }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
?>
</body>
</html>