<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function doble($i) {
        return $i*2; 
        }
        $a = TRUE;  /* variable tipo booleana  */
        $b = "xyz"; /* variable tipo string */
        $c = 'xyz'; /* variable tipo string */
        $d = 12;     /* variable tipo entero */
        echo gettype($a); /* función echo */
        echo gettype($b);
        echo gettype($c);
        echo gettype($d);
        if (is_int($d)) {
        $d += 4;
        }
        if (is_string($a)) {
        echo "Cadena: $a";
        }
        $d = $a ? ++$d : $d*3;
        $f = doble($d++);
        $g = $f += 10;
        echo $a, $b, $c, $d, $f , $g;
        ?> 
</body>
</html>