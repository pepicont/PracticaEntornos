<!-- Confeccionar un formulario que solicite ingresar el mail de un alumno. Si el mail existe en la tabla
alumnos, rescatar su nombre y almacenarlo en una variable de sesión. Además disponer un
hipervínculo a una tercera página que verifique si existe la variable de sesión y de la bienvenida al 
alumno, en caso contrario mostrar un mensaje indicando que no puede visitar esta página (para
saber si una variable de sesión está definida llamamos a la función isset)
if (isset($_SESSION['nombre'])) ....
Para la realización del ejercicio crear una base de datos con el nombre base2. La misma debe tener
una tabla denominada alumnos con atributos: codigo, nombre, codigocurso, mail. -->
<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag2</title>
</head>
<body>
    <?php
    include ("conexion.inc");//Conectamos al servidor
    $mail= $_POST['mail']; //traemos los datos del form
    $vSql = "select * FROM alumnos WHERE mail ='$mail'";
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
    $fila = mysqli_fetch_array($vResultado);
    if(mysqli_num_rows($vResultado) == 0) {
    echo ("Usuario Inexistente...!!! <br>");
    }
    else{
    $_SESSION['usuario']= $fila['nombre'];
    }
    ?>
    <a href="pag3.php">Ingresar a pagina principal</a>;
</body>
</html>