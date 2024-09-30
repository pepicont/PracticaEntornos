<?php
if (isset($_COOKIE['contador'])){
   $contador=++$_COOKIE['contador']; //Agrega una visista al contador
   setcookie("contador", $contador , time()+ 3600*24*365); //ACtualiza la cookie

   // Mostrar el total de visitas
   echo "<font face='arial' size='3'>Cantidad de visitas:".$contador."</font>";
}
else{
   $contador=1; //inicializa la cookie en 1
   setcookie("contador", $contador , time()+ 3600*24*365); //Crea la cookie
   echo "<h1>Bienvenido a la página</h1>" ; 

}

?>