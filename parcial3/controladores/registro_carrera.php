<script src="../js/sweetalert2@10.js"></script>
.

<?php

//paso 1: llamar la libreria de conexion a la BD 

require "../config/conexion.php";

//paso2: capturar variables

$nombre = $_POST["nombre"];
$documento = $_POST["documento"];
$rol = $_POST["rol"];
$categoria = $_POST["categoria"];
//paso 3: arma el sql que hicimos en phpmyadmin

$sql_insertar ="INSERT INTO registro_carrera(fecha_sys,nombre,documento, rol, categoria) VALUES (now(),'".$nombre."','".$documento."','".$rol."','".$categoria."')";
 echo $sql_insertar;
if ($dbh->query($sql_insertar)) 
{
    echo "<script>
    Swal.fire({
      title: 'COMPRA SATISFACTORIA',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
        window.location.href = '../index.html';
      }
    });
  </script>";
}else{
    echo "<script>
            Swal.fire({
              title: 'Error eliminando',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
            // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '../index.html';
              }
            });
          </script>";
}

?> 