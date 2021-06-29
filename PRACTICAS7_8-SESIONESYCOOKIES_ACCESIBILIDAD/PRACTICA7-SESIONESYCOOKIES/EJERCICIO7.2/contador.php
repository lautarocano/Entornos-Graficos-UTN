<?php 
if (isset($_COOKIE["contador"])){
    $contador=$_COOKIE["contador"];
    }
?>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <?php
        if (isset($contador)){
            echo "Contador de visitas: " . $contador;
            $contador ++;
            setcookie("contador", $contador, time() + (60 * 60 * 24 * 90));

        }
        else{
            $contador = 2;
            setcookie("contador", $contador, time() + (60 * 60 * 24 * 90));
            echo "Bienvenido a la pagina";
            
        }
    ?>
</body>
</html>