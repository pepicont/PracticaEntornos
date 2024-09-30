<!-- Realizar una página donde carguemos en un formulario el nombre de usuario y clave de un cliente.
Luego realizar una segunda página donde se creen dos variables de sesión. Y como última página
crear una tercera en la cual se recuperen los valores almacenados en las variables de sesión
anterior.  -->
<?php 
session_start();
$_SESSION['usuario']=$_POST['usuario'];
$_SESSION['contrasena']=$_POST['contrasena'];
exit(header("Location:pag3.php"));
?>