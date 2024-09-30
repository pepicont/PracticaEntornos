<!-- Crear un formulario que solicite la carga del nombre de usuario. Cuando se presione un botón
crear una cookie para dicho usuario. Luego cada vez que ingrese al formulario mostrar el último
nombre de usuario ingresado.  -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        Usuario <input type="text" name="usuario"
        <?php if(isset($_COOKIE['usuario'])){
            $usuario=$_COOKIE['usuario'];
            echo 'value='.$usuario.'';
        }?>
        >
        <input type="submit" value="Iniciar sesión">
    </form>
    
    <?php 
        if(isset($_POST["usuario"])){
            setcookie('usuario',$_POST['usuario'],time()+(60*60*24*365));
        }
    ?>
</body>
</html>