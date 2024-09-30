<?php 
if(isset($_GET['estilo'])){ //Checkeamos si ya había contestado el formulario
    $estilo=$_GET['estilo']; //Traemos lo que había contestado
    setcookie('estilo',$estilo,time()+(60*60*24*7)); //Lo guardamos en una cookie
    
}   
    else{
       if(isset($_COOKIE['estilo'])){
        $estilo = $_COOKIE['estilo'];
}
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando cookies</title>
    <?php 
    if(isset($estilo)){
        echo '<link rel="stylesheet" href="'.$estilo.'">';
    }
    ?>
</head>
<body>  
    <div>
        <h1>Estamos probando las cookies</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores blanditiis nobis mollitia at, iusto magni assumenda perferendis voluptatibus exercitationem nemo reprehenderit
            , quas et debitis, quae doloremque corporis rem laudantium odio.</p>

    </div>
    



    <form action method="GET">
            Elija un estilo de CSS:
            <select name="estilo">
                <option value="claro.css">Claro</option>
                <option value="oscuro.css">Oscuro</option>
                <option value="colorido.css">Colorido</option>
                <input type="submit" value="Enviar">
            </select> 
    </form>
</body>
</html>