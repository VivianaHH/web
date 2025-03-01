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
    <title>Actualizar Registros</title>
    <script src="modernizr.min.js"></script>
</head>

<body>
    <header>
        <h2>Actualizar Registros de la BD con PHP</h2>
    </header>
    <section>
        
    <form method="POST">
    <table>
            <tr>
                <th>ID AUTO</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>COMBUSTIBLE</th>
                <th>COLOR</th>
                <th>AÑO</th>
                <th>PRECIO</th>
            </tr>
    <?php
    while ($resultadoAutCon = $resultadoAut->fetch_array(MYSQLI_BOTH)) {
        echo '<tr>';
        echo '<td><input name="id_aut['.$resultadoAutCon['id'].']" value="'.$resultadoAutCon['id'].'"/></td>';
        echo '<td><input name="marc['.$resultadoAutCon['id'].']" value="'.$resultadoAutCon['marca'].'" autofocus/></td>';
        echo '<td><input name="mod['.$resultadoAutCon['id'].']" value="'.$resultadoAutCon['modelo'].'"/> </td>';
        echo '<td><input name="comb['.$resultadoAutCon['id'].']" value="'.$resultadoAutCon['combustible'].'"/></td>';
        echo '<td><input name="colo['.$resultadoAutCon['id'].']" value="'.$resultadoAutCon['color'].'"/> </td>';
        echo '<td><input name="fech['.$resultadoAutCon['id'].']" value="'.$resultadoAutCon['fecha'].'"/> </td>';
        echo '<td><input name="pre['.$resultadoAutCon['id'].']" value="'.$resultadoAutCon['precio'].'"/> </td>';
        echo '</tr>';
    }
    ?>
    </table>
    
    <input type="submit" name="actualizar" value="Actualizar Registros">
    <button>Recargar</button>
    <?php
        if (isset($_POST['actualizar'])) {
            foreach ($_POST['id_aut'] as $id_actualizar) {
                $editID = $_POST['id_aut'][$id_actualizar];
                $editMarca = $_POST['marc'][$id_actualizar];
                $editModelo = $_POST['mod'][$id_actualizar];
                $editCom = $_POST['comb'][$id_actualizar];
                $editColor = $_POST['colo'][$id_actualizar];
                $editFech = $_POST['fech'][$id_actualizar];
                $editPre = $_POST['pre'][$id_actualizar];
                
                // Corregir la consulta SQL
                $ActualizarAutos = $mysqli->query("UPDATE autos SET id='$editID', marca='$editMarca', modelo='$editModelo', combustible='$editCom', color='$editColor', fecha='$editFech', precio='$editPre' WHERE id='$editID'");
            }
            if ($ActualizarAutos) {
                echo "¡Actualización exitosa! <a href='actualizar.php'>Regresar</a>";
            } else {
                echo "¡Error en la actualización!";
            }
        }
    ?>
    </form>
    </section>
    <br><br>
    <a href="http://localhost/agencia_autos/consulta.php">Consultar Registros</a>
</body>
</html>
