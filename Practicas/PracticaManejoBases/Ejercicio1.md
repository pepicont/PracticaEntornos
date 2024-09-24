Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función
**mysqli_connect (mysql_connect)**
**Esta función nos permite crear una conexión con una base de datos concreta.**
Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
**-$hostname: es un nombre de servidor (dato que debemos consultar en nuestra cuenta de hosting),**
**-$nombreUsuario: es el nombre de usuario de base de datos, nombre que habremos especificado al crear la base de datos (si no lo hemos hecho, puede ser root),**
**-$contraseña: es la contraseña de acceso para el usuario de base de datos, contraseña que habremos especificado al crear la base de datos.**
Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
**mysqli_select_db ($nombreConexión, $nombreBaseDatos);**
Esta función debe pasar como parámetro
**-$nombreConexión: será aquel que hayamos obtenido previamente con la función mysqli_connect.**
**-$nombreBaseDatos: es el nombre de la base de datos a la que nos deseamos conectar.**
La función mysqli_query() se utiliza para:
**Consultar a la base de datos**
y requiere como parámetros
**-$nombreConexión: será aquel que hayamos obtenido previamente con la función mysqli_connect.**
**-$query: consulta realizada utilizando el lenguaje SQL de consultas a bases de datos.**
La cláusula or die() se utiliza para:
**Capturar el error en una consulta a la base de datos**
y la función mysqli_error() se puede usar para
**Devolver el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado.**
Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo $vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):
    <?php
    while ($fila = mysqli_fetch_array($vResultado)) //Utiliza una estructura de control while con la condición ($fila = mysqli_fetch_array($vResultado)) esta condición devuelve una fila del resultado del query a la base de datos. Cuando ya no haya más resultados o "filas" disponbiles retorna NULL.
    {
    ?>
    <tr> **//Crea una fila de una table**
    <td><?php echo ($fila[0]); ?></td> **//Muestra el primer campo de la fila**
    <td><?php echo ($fila[1]); ?></td>**//Muestra el segundo campo de la fila**
    <td><?php echo ($fila[2]); ?></td>**//Muestra el tercer campo de la fila**
    </tr>**//Cierra la fila de la table que contiene la información del resultado**
    <tr>
    <td colspan="5">
    <?php
    }
    mysqli_free_result($vResultado); **//Limpia la variable $vResultado que es la que contiene los resultados del query a la base de datos.**
    mysqli_close($link); **//Cierra la conexión a la base de datos.**
    ?>

