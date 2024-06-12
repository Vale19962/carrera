
<?php
//Paso 1: Importar la libreria de la BD
require "config/conexion.php";

//Paso 2: Capturando variables


//Paso 3: Armo la sentencia sql que necesite
$sql =  "SELECT fecha_sys,nombre,documento, rol, categoria
FROM registro_carrera
WHERE 1";

//Paso 4, recorrer el arreglo
foreach($dbh->query($sql) as $row)
{
     print "<tr>
	<td>".$row["fecha_sys"]."</td>
	<td>".$row["nombre"]."</td>
  <td>".$row["documento"]."</td>
  <td>".$row["rol"]."</td>
  <td>".$row["categoria"]."</td>
	</tr>  
     ";               
}
?>