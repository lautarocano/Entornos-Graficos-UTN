<?php
    session_start();
    if (!isset($_SESSION["contador"])){
     $_SESSION["contador"] = 1;
    }
    else{
     $_SESSION["contador"]++;
    }
    $Cantidad_visitas=$_SESSION["contador"];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5.4 Home</title>
    </head>

    <body>
            <h1> Pagina 2 </h1>
            <?php
            echo "Has visitado " . $Cantidad_visitas . " páginas";
            ?>
            <br>
            <br>
            <a href="cant_visitas.php">Ir al inicio</a>
    </body>
</html>