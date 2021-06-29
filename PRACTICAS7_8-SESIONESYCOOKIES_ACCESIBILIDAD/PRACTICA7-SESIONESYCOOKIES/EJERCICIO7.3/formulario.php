<?php
     if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 90));
    }
?>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        if (isset($nombre)) { 
            echo '<h1>Bienvenido ' . $nombre. '</h1>';
        }
    ?>
    <form action="formulario.php" method="post">
        <label for="nombre">
            Aquí puedes cargar tu nombre:
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        </label>
        <input type="submit" value="Cargar nombre">
    </form>
</body>
</html>