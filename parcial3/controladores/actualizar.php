<script src="../js/sweetalert2@10.js"></script>
.

<?php
//Paso 1: llamar la libreria de conexion a la BD
require "../config/conexion.php";

//Paso 2: capturar variables
$nombre = $_POST["nombre"];
$rol = $_POST["rol"];
$categoria = $_POST["categoria"];

//paso 3: Armas el sql que hicimos en phpmyadmin
$sql_actualizar = "UPDATE registro_carrera SET  rol='".$rol."', categoria='".$categoria."' WHERE nombre='".$nombre."'";
//echo $sql_insertar

echo $sql_actualizar;

if ($dbh->query($sql_actualizar)) 
{
    echo "<script>
    Swal.fire({
      title: 'COMPRA ACTUALIZADA SATISFACTORIAMENTE',
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
