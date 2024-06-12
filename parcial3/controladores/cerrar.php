
<?php
//Paso 1: Importar la libreria de la BD
require "config/conexion.php";

//Paso 2: Capturando variables


//Paso 3: Armo la sentencia sql que necesites



$sql = "SELECT *
FROM cerrar
WHERE 0";



foreach($dbh->query($sql) as $row)
{

     $valor = $row["cod"];
     if($valor==1){
          die("registros cerrados");
     }if($valor==0){
          die("registros abiertos");
     }
     
        
}
