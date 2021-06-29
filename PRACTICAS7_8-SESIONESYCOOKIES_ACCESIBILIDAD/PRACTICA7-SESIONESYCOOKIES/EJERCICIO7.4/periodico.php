<?php
     if (isset($_POST["titular"])) {
        $titular = $_POST["titular"];
        setcookie("titular", $titular, time() + (60 * 60 * 24 * 90));
    }
?>
<html>
<head>
   <title>Ejercicio 4</title>
</head>
<body>
    <h1>Lorem Ipsum</h1>
    <?php
        if (isset($titular)){
            echo "<h3>Noticia $titular</h3>";
            echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a leo vitae tortor interdum ullamcorper ac sed ipsum. Cras lobortis a leo quis accumsan. Donec blandit lectus quis gravida dapibus. Praesent feugiat libero vitae ex tincidunt placerat. Quisque magna massa, vehicula sed est at, accumsan viverra nunc. Morbi tempor pellentesque nisl non consequat. Phasellus non congue lorem. Suspendisse convallis mauris ut ornare eleifend. Nulla fermentum pharetra tortor, pharetra maximus dui semper pellentesque. In hac habitasse platea dictumst. Praesent viverra ultrices diam, nec iaculis lacus ultrices in. Vestibulum vel tincidunt mi, in iaculis massa.</p>";
        }
        else{
            echo '<h3>Noticia Política </h3>';
            echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a leo vitae tortor interdum ullamcorper ac sed ipsum. Cras lobortis a leo quis accumsan. Donec blandit lectus quis gravida dapibus. Praesent feugiat libero vitae ex tincidunt placerat. Quisque magna massa, vehicula sed est at, accumsan viverra nunc. Morbi tempor pellentesque nisl non consequat. Phasellus non congue lorem. Suspendisse convallis mauris ut ornare eleifend. Nulla fermentum pharetra tortor, pharetra maximus dui semper pellentesque. In hac habitasse platea dictumst. Praesent viverra ultrices diam, nec iaculis lacus ultrices in. Vestibulum vel tincidunt mi, in iaculis massa.</p>";
            echo '<h3>Noticia Económica </h3>';
            echo "<p>Nunc dapibus nisi eu quam auctor lacinia. Aliquam sodales tristique augue, in luctus odio euismod ac. Nullam volutpat, elit in ultricies consectetur, odio libero pretium ipsum, vel tristique nisi tellus ut arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur urna felis, commodo non purus at, blandit mollis nunc. Donec ipsum eros, pellentesque sit amet velit ac, pretium facilisis turpis. Mauris convallis sed dui sed consectetur.</p>";
            echo '<h3>Noticia Deportiva </h3>';
            echo "<p>Nam mi mi, cursus sit amet enim quis, laoreet sodales lorem. Mauris eu ipsum euismod, pellentesque purus suscipit, pharetra elit. Suspendisse at nunc fermentum, dignissim metus nec, laoreet nisl. Donec auctor, risus vitae convallis commodo, ex est dapibus mauris, id consequat ipsum lacus sed augue. Duis dapibus, urna sed dapibus efficitur, nunc velit laoreet nisl, sed viverra velit tellus nec risus. Sed finibus, ex lacinia sagittis imperdiet, sem massa varius lacus, a dictum ipsum ex in risus. Donec aliquet feugiat sem ut gravida. Praesent a justo tincidunt, tempus mi vel, faucibus nunc. Nulla facilisi. Vivamus iaculis metus ut vestibulum bibendum. Nullam non congue tortor. In eu dolor elementum sem iaculis mollis. Etiam imperdiet nisi odio, vitae vulputate ipsum facilisis eu. Curabitur rutrum fringilla quam, vitae ornare eros rhoncus consequat.</p>";
        }
    ?>
    <br>
    <a href="titulares.html">Cambiar titular</a>
    <br>
    <a href="borrar.php">Borrar Cookies</a>
</body>
</html>