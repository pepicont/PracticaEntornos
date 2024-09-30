<?php 
include("conexion.inc");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>
    <form>
        Cancion:<input type="text" required method="GET" name="cancion">
        <input type="submit" value="buscar">
    </form>
</body>
</html>

<?php 
if(isset($_GET['cancion'])){
    $cancion=$_GET['cancion'];
    $qry="select * FROM buscador WHERE canciones='$cancion'";
    $array=mysqli_query($link,$qry);
    if(mysqli_num_rows($array)==0){
        echo "<h1> No hubo resultados </h1>";
    }
    else{
        
        $row = mysqli_fetch_assoc($array);
        echo "<h1> canción encontrada: ".$row['canciones']."</h1>";
    }

}
?>