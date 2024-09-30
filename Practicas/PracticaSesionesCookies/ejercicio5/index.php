<!-- Realizar una página donde carguemos en un formulario el nombre de usuario y clave de un cliente.
Luego realizar una segunda página donde se creen dos variables de sesión. Y como última página
crear una tercera en la cual se recuperen los valores almacenados en las variables de sesión
anterior.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <form action="pag2.php" method="POST" name="form">
        Usuario: <input name="usuario" type="text" required>
        <br>
        Contraseña:<input name="contrasena" type="password" required>
        <input type="submit" value="iniciar sesión">

    </form>
   
</body>
</html>
<?php 

    if(isset($_POST['form'])){
    exit(header("Location:pag2.php"));
    }
    ?>