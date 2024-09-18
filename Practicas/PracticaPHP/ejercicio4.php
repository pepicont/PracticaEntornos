<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();?>
    <?php
    if (!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
    }else{
    $_SESSION["contador"]++;
    }
    ?>
    <?php echo "Has visitado " .
    $_SESSION["contador"] . " paginas"; ?>
    <?php
    function comprobar_nombre_usuario($nombre_usuario){
        //compruebo que el tamaño del string sea válido.
        if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
        }
        //compruebo que los caracteres sean los permitidos
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
        _";
        for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
        echo $nombre_usuario . " no es válido<br>";
        return false;
        }
        }
        echo $nombre_usuario . " es válido<br>";
        return true;
        } 
    
  ?>
    <form action="ejercicio4.php" method="post"> 
        <label> Introduce tu nombre de usuario: </label>
        <input type="text" name="nombre_usuario" id="nombre_usuario">
        <input type="submit" value="Comprobar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_usuario = $_POST['nombre_usuario'] ;
        comprobar_nombre_usuario($nombre_usuario);
    }
    ?>
       
    <a href="index.php">Volver</a>


       

</body>
</html>