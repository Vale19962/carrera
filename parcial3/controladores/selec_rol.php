<?php

//paso 1
include "config/conexion.php";

//paso 2
$sql = "SELECT cod, rol 
FROM rol
WHERE 1";

//Paso 3
foreach($dbh->query($sql) as $row)
{
    print "
    <option value='".$row['cod']."'>".$row['rol']."</option>
    ";
}
