<!-- Realizar una página donde carguemos en un formulario el nombre de usuario y clave de un cliente.
Luego realizar una segunda página donde se creen dos variables de sesión. Y como última página
crear una tercera en la cual se recuperen los valores almacenados en las variables de sesión
anterior.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    $usuario=$_SESSION['usuario'];
    echo "<h1> Bienvenido ".$usuario."!!</h1>";
    ?>
</body>
</html>