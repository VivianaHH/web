<?php
    require 'conexion.php';
    
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $combustible = $_POST['combustible'];
    $color = $_POST['color'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    
    $sql = "INSERT INTO autos (marca, modelo, combustible, color, fecha, precio) VALUES ('$marca', '$modelo', '$combustible', '$color', 
    '$fecha', '$precio')";
    
    $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta charset="iso-8859-1">
    <meta name="description" content="Ejemplo HTML5">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <title>Formulario de Alta</title>
    <script src="modernizr.min.js"></script>
</head>
<body>
<?php
echo "Ha insertado los siguientes datos:";
echo "<br><br>";
echo "Marca:", ($_POST['marca']);
echo "<br>";
echo "Modelo:", ($_POST['modelo']);
echo "<br>";
echo "Combustible:", ($_POST['combustible']);
echo "<br>";
echo "Color:", ($_POST['color']);
echo "<br>";
echo "Fecha:", ($_POST['fecha']);
echo "<br>";
echo "Precio:", ($_POST['precio']);
echo "<br>";
echo "<br><br>";
?>
<a href="http://localhost/agencia_autos/frmformulario.html">Volver
</a>
</body>
</html>