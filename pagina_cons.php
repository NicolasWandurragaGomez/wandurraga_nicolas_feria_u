<?php
    require'modelo/conexion.php';
    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de consultas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Página de consultas</h1>
    <hr>
    <a href="consulta_acom.php">Consultar acompañante</a>
    <hr>
    <a href="consulta_adm.php">Consulta administrador</a>
    <hr>
    <a href="consulta_apo.php">Consulta apoyo</a>
    <hr>
    <a href="consulta_col.php">Consultar colegio</a>
    <hr>
    <a href="consulta_del.php">Consultar Delegado</a>
    <hr>
    <a href="consulta_doc.php">Consultar Docente</a>
    <hr>
    <a href="consulta_est.php">Consultar Estudiante</a>
    <hr>
    <a href="consulta_gui.php">Consultar Guia</a>
    <hr>
    <a href="consulta_rut.php">Consultar Ruta</a>
    <hr>
    <a href="consulta_uni.php">Consultar Universidad</a>

    <hr>
    <a href="cerrar_sesion.php">cerrar_sesion</a>
<body>
</html>