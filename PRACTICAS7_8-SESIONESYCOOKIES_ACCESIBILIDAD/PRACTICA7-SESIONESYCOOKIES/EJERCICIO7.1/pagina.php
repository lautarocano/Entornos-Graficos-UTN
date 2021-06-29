<?php
    //Veo si recibo datos del formulario 
    if (isset($_POST["estilo"])) {
        //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
        $estilo = $_POST["estilo"];
        //meto el estilo en una cookie 
        setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
    } else{
        //si no he recibido el estilo que desea el usuario en la página, miro si hay una cookie creada
        if (isset($_COOKIE["estilo"])) {
            //es que tengo la cookie 
            $estilo = $_COOKIE["estilo"];
        }
    }
?>
<html>
<head>
    <title>Ejercicio 1</title>
    <?php
        if (isset($estilo)) { 
            echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo. '.css">';
        }
    ?>
</head>
<body>
    <form action="pagina.php" method="post">
        Aquí puedes seleccionar el estilo (color de fondo) que página:
        <br>
        <select name="estilo">
            <option value="verde">Verde
            <option value="rosa">Rosa 
            <option value="negro">Negro
        </select>
        <input type="submit" value="Actualizar el estilo">
    </form>
</body>
</html>
