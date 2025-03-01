<?php
    require 'conexion.php';
    
    $aut = "SELECT * FROM autos";
    $resultadoAut = $mysqli->query($aut);
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta charset="iso-8859-1">
    <meta name="description" content="Ejemplo HTML5">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <title>Mostrar Registros</title>
    <script src="modernizr.min.js"></script>

</head>

<body>
    <header>
        <h2> Mostrar Registros de la BD con PHP</h2>
    </header>
    
    <section>
        
        <FORM METHOD="POST">
            
        <table>
        <tr>
            <th>ID Auto</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Combustible</th>
            <th>Color</th>
            <th>Año</th>
            <th>Precio</th>
            <th>Seleccionar</th>
        </tr>
        <?php
        while ($resultadoAutCon = $resultadoAut->fetch_array (MYSQLI_BOTH))
        {
            echo '<tr>
            <td>'.$resultadoAutCon['id'].'</td>
            <td>'.$resultadoAutCon['marca'].'</td>
            <td>'.$resultadoAutCon['modelo'].'</td>
            <td>'.$resultadoAutCon['combustible'].'</td>
            <td>'.$resultadoAutCon['color'].'</td>
            <td>'.$resultadoAutCon['fecha'].'</td>
            <td>'.$resultadoAutCon['precio'].'</td>
            <td><input type="checkbox" name = "eliminar[]" value="'.$resultadoAutCon['id'].'"/>
            </tr>';
        }
        ?>
    </table>
    <input type="submit" name="borrar" value="Eliminar Registros">
    <button>Recargar</button>

<?php
if(isset($_POST['borrar']))
{
    if(empty($_POST['eliminar']))
    {
       echo '<h1>No se ha Seleccionado ningun Registro.</h1>';
    }
    else
    {
       foreach ($_POST['eliminar'] as $id_borrar)
       {
            $borrarAutos= $mysqli->query("DELETE FROM autos where id='$id_borrar'");
        }
    }
}
?>
    <FORM>
    </section>

<a href="http://localhost/agencia_autos/actualizar.php"> Actualizar Registros</a>
</body>
</html>

