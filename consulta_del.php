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
    <title>Consulta Delegado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Consulta Delegado</h1>

    <!--Mostrar consulta-->
    <?php
        if(isset($_SESSION['username']))
        {
            $query = "SELECT * From Delegado";
            $resultado = mysqli_query($conexion, $query) or trigger_error("Error en la consulta: " .mysqli_error($conexion));

            //Encabezado de la tabla de resultados
            echo "<table border='1' align='center'>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Nombre</th>";
                echo "<th>Correo</th>";
                echo "<th>Password</th>";
                echo "<th>Telefono</th>";
                echo "<th>ID_Universidad</th>";
            echo "</tr>";
            
            // Filas de la tabla, traidos de la consulta  a la BD
            while($fila = mysqli_fetch_array($resultado))
            {
                echo "<tr>";
                    echo "<td>";
                        echo $fila['id_delegado'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['nombre_delegado'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['correo_delegado'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['password_delegado'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['telefono_delegado'];
                    echo "</td>";
                    echo "<td>";
                    echo $fila['id_universidad'];
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