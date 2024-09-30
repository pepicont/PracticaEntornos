<?php 
if(isset($_COOKIE['titular'])){
    $titular = $_COOKIE['titular'];
} else {
    $titular = "";
}

if(isset($_GET['titular'])){
    setcookie('titular', $_GET['titular'], time() + (60 * 60 * 24 * 365));
    $titular = $_GET['titular'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        Seleccione un titular: 
        <input type="radio" name="titular" value="politica" <?php if($titular == 'politica') echo 'checked'; ?>> Noticia política<br>
        <input type="radio" name="titular" value="economica" <?php if($titular == 'economica') echo 'checked'; ?>> Noticia económica<br>
        <input type="radio" name="titular" value="deportiva" <?php if($titular == 'deportiva') echo 'checked'; ?>> Noticia deportiva<br>
        <input type="submit" value="Guardar">
    </form>
    <iframe src="
    <?php 
        if ($titular != ""){
            switch ($titular){
                case "politica": 
                    $url = "https://www.lacapital.com.ar/politica/milei-susana-gimenez-de-aca-adelante-solo-quedan-buenas-noticias-n10156191.html";
                    break;
                case "economica": 
                    $url = "https://www.lacapital.com.ar/economia/un-cuarto-la-clase-media-argentina-ya-cayo-una-situacion-empobrecimiento-n10156131.html";
                    break;
                case "deportiva": 
                    $url = "https://www.lacapital.com.ar/ovacion/colapinto-y-un-mes-pura-aceleracion-la-formula-uno-que-lo-llevo-estar-boca-todo-el-mundo-n10156182.html";
                    break;
                default:
                    $url = "";
                    break;
            }
            echo $url;
        }
    ?>" width="100%" height="1500px">
    </iframe>
</body>
</html>
