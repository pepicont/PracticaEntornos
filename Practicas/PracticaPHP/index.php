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

</body>
</html>