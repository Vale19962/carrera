<?php
// Paso 1: Importar la libreria de la BD
require "config/conexion.php";

// Paso 2: Capturando variables
if(isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];

    // Paso 3: Armar la sentencia SQL que necesite
    $sql = "SELECT *
            FROM registro_carrera
            WHERE nombre LIKE '%" . $nombre . "%'";

    // Paso 4: Ejecutar la consulta y recorrer el resultado
    foreach($dbh->query($sql) as $row) {
        print "<tr>
                <td>".$row["fecha_sys"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["documento"]."</td>
                <td>".$row["rol"]."</td>
                <td>".$row["categoria"]."</td>
            </tr>";
    }
} else {
    echo "No se recibió el nombre.";
}
?>
