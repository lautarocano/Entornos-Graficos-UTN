<!DOCTYPE html>
<html lang="es">

<head>
    <title>Alta Ciudad</title>
</head>

<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
if (isset($_POST['tiene-metro'])) {
    $tieneMetro = TRUE;
}
else $tieneMetro = 0;
$vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
values ('$ciudad','$pais', '$habitantes', '$superficie', '$tieneMetro')";
mysqli_query($link, $vSql) or die (mysqli_error($link));
echo("La ciudad fue Registrada correctamente.<br>");
echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>

</html>