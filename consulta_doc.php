<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Docente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Consulta Docente</h1>

    <!--Mostrar consulta-->
    <?php
        if(isset($_SESSION['username']))
        {
            $query = "SELECT * From Docente";
            $resultado = mysqli_query($conexion, $query) or trigger_error("Error en la consulta: " .mysqli_error($conexion));

            //Encabezado de la tabla de resultados
            echo "<table border='1' align='center'>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Nombre</th>";
                echo "<th>Doc.Ident</th>";
                echo "<th>Correo</th>";
                echo "<th>Telefono</th>";
                echo "<th>Password</th>";
                echo "<th>ID_Colegio</th>";
                echo "<th>ID_Ruta</th>";
            echo "</tr>";
            
            // Filas de la tabla, traidos de la consulta  a la BD
            while($fila = mysqli_fetch_array($resultado))
            {
                echo "<tr>";
                    echo "<td>";
                        echo $fila['id_docente'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['nombre_docente'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['doc_ident_docente'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['correo_docente'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['telefono_docente'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['password_docente'];
                    echo "<td>";
                    echo $fila['id_colegio'];
                    echo "<td>";
                    echo "<td>";
                    echo $fila['id_ruta'];
                    echo "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
        else
        {
            header('location: ../index.php');
        }
    ?>
</body>
</html>