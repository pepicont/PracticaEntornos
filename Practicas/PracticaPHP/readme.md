EJERCICIO 1:
<?php
        function doble($i) {
        return $i*2; 
        }
        $a = TRUE;  /* variable tipo booleana  */
        $b = "xyz"; /* variable tipo string */
        $c = 'xyz'; /* variable tipo string */
        $d = 12;     /* variable tipo entero */
        echo gettype($a); // Muestra el tipo de la variable $a
        echo gettype($b); // Muestra el tipo de la variable $b
        echo gettype($c); // Muestra el tipo de la variable $c
        echo gettype($d); // Muestra el tipo de la variable $d
        if (is_int($d)) {  /* Estructura de control if que evalua si la variable d 
            es un integer  a través de la función is_int() */
        $d += 4; /* Si la variable d es un integer se le suma 4 */
        }
        if (is_string($a)) {   /* Estructura de control if que evalua si la variable a 
            es un string a través de la función is_string() */
        echo "Cadena: $a";  /* Si la variable a es un string se imprime cadena:True en pantalla */
        }
        $d = $a ? ++$d : $d*3;  /* Operador ternario que evalua si la variable a es verdadera.
        En el caso en que a sea verdadera: se le suma 1 a d y se asigna en si mísma.
        En el caso en ue a sea falsa: se le asigna a d su valor triplicado*/
        $f = doble($d++); /* Se llama a la función doble() pasandole como parámetro el valor de d y se asigna a f.*/
        $g = $f += 10; /* Se incrementa la variable f en 10 ,y  después se asigna ya la variable f incrementada a g. */
        echo $a, $b, $c, $d, $f , $g; /* Se imprimen en pantalla las variables a,b,c,d,f y g */
       ;
        ?> 
    EJERCICIO 2:
    Si bien en pantalla tienen resultados equivalentes. Los resultados finales son distintos, las opciones a y b primero muestran i y luego la aumentan, quedando como valor final de i=11. Mientras que la opción c primero suma y después la muestra, por lo tanto el valor final de i en este caso es i=10. 

    EJERCICIO 2-B:
    En pantalla todas las opciones son equivalentes y el valor final de la variable i es en todos los casos i=11. Si bien todas funcionan , no siguen las buenas prácticas.
    
    EJERCICIO 2-C:
    Ambas expresiones son equivalentes, la estructura de control switch se utiliza en casos en los cuales son muchas condiciones elseif a evaluar y la variable que se esta evaluando es simple.

    EJERCICIO 3-A
      <?php
        echo "<table width = 90% border = '1' >"; /* Crea una tabla en html con border=1 */
        $row = 5; /* Número de filas */
        $col = 2; /* Número de columnas */
        for ($r = 1; $r <= $row; $r++) { /* Bucle de iteración for que itera el valor de la variable filas */
        echo "<tr>"; /* Crea una fila en html */
        for ($c = 1; $c <= $col;$c++) { /* Bucle de iteración for que itera el valor de la variable columnas */
        echo "<td>&nbsp;</td>\n"; /* Crea una celda en html, el valor &nbsp representa el blanco */
        } echo "</tr>\n"; /* Cierra la fila en html cuando termina de hacer las celdas*/
        }
        echo "</table>\n"; /* Cierra la tabla en html cuando se terminan de crear las celdas y columnas */

        ?>
        <!-- Basicamente lo que hace la función es crear una tabla en html con la cantidad  de filas y columnas especificadas -->
        
    
    EJERCICIO 3-B:
        <?php
        if (!isset($_POST['submit'])) { /* Verifica si el formulario ya ha sido enviado anteriormente*/
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Edad: <input name="age" size="2"> <!-- Muestra un campo de entrada de un formulario para ingresar la edad -->
        <input type="submit" name="submit" value="Ir">
        </form>
        <?php
        }
        else { /* Si el formulario ha sido enviado, se ejecuta el siguiente código en PHP */
        $age = $_POST['age'];
        if ($age >= 21) {
        echo 'Mayor de edad';
        } /* Código que compara la edad ingresada y determina si es mayor o menor de edad */
        else {
        echo 'Menor de edad';
        }
        }
        ?>  
        Basicamente lo que hace es mostrar un formulario para ingresar la edad y muestrar un mensaje indicando si la persona es mayor o menor de edad en función de la edad ingresada.

    EJERCICIO 4:
        <?php
        echo "El $flor $color \n"; <!-- Tira error esta línea ya que las variables $flor y $color no está definidas -->
        include 'datos.php';
        echo " El $flor $color";
        ?> 

    EJERCICIO 5:
    <?php

        // Archivo para acumular el numero de visitas
        $archivo = "contador.dat";
        // Abrir el archivo para escritura y lectura y crearlo
        $abrir = fopen($archivo, "a+");
        $tamanoArchivo = filesize($archivo); //Trae el tamaño del archivo
        if ($tamanoArchivo == 0) {
        $cont=0;
        fwrite($abrir,$cont);
        }
        else{
        // Leer el contenido del archivo
        $cont = fread($abrir, filesize($archivo));
        }
        // Cerrar el archivo
        fclose($abrir);

        // Abrir nuevamente el archivo para escritura
        $abrir = fopen($archivo, "w+");
        // Agregar 1 visita
        $nro=(int)$cont;
        $cont = $nro + 1;
        // Guardar la modificación
        $guardar = fwrite($abrir, $cont);
        // Cerrar el archivo
        fclose($abrir);
        // Mostrar el total de visitas
        echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";

        ?>
        