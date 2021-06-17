<!DOCTYPE html>
<html lang="es">

<head>
    <title>Modificacion</title>
</head>

<body>
    <?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vID = $_POST['id'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
if (isset($_POST['tiene-metro'])) {
    $tieneMetro = TRUE;
}
else $tieneMetro = 0;
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE ciudades SET ciudad='$ciudad', pais='$pais', habitantes='$habitantes', superficie='$superficie',
  tieneMetro='$tieneMetro' WHERE id = '$vID' ";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La ciudad fue Modificada<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>

</html>