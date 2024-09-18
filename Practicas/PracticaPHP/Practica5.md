EJERCICIO 1:
    <body>
    <form action="index.php" method="post">
        Destinatario:<input type="text" placeholder="Destinatario del mail..." name="destinatario" id="destinatario">
        <br></br>
        Asunto:<input type="text" placeholder="Asunto del mail..." name="asunto" id="asunto">
        <br></br>
        <label for="cuerpo" >Cuerpo:</label><textarea name="cuerpo" id="cuerpo" maxlength="500" row="15" cols="30" style="  max-width: 300px; max-height: 150px;"></textarea>
        <input type="submit" value="Enviar">
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $destinatario=$_POST['destinatario'];
            $asunto=$_POST['asunto'];
            $cuerpo=$_POST['cuerpo'];
            mail($destinatario,$asunto,$cuerpo);

        }
        
    ?>
    </body>

    EJERCICIO2:
        <body>
        <h3>Hacenos tu consulta</h3>
        <form action="index.php" method="post">
        
            Asunto de la consulta:<input type="text" placeholder="Asunto del mail..." name="asunto" id="asunto">
            <br></br>
            <label for="cuerpo" >Mensaje:</label><textarea name="cuerpo" id="cuerpo" maxlength="500" row="15" cols="30" style="  max-width: 300px; max-height: 150px;"></textarea>
            <input type="submit" value="Enviar">
        </form>

        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $destinatario="webmaster@mail.com";
            $asunto=$_POST['asunto'];
            $cuerpo=$_POST['cuerpo'];
            mail($destinatario,$asunto,$cuerpo);

        }  
        ?>
        </body>

    EJERCICIO3:
        <body>
            <h3>Recomendanos a un amigo!!!</h3>
            <form action="index.php" method="post">
                Destinatario:<input type="text" name="destinatario">
                <input type="submit" value="Recomendar">
            </form>

            <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $destinatario=$_POST['destinatario'];
                $asunto="Hey, checkea este sitio web!!";
                $cuerpo="Te recomiendo que veas este sitio web " . "www.ejemplo.com" ;
                mail($destinatario,$asunto,$cuerpo);

            }
                
            ?>
        </body>
        
