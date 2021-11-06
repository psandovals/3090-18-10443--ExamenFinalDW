<?php

include("db.php");

if (isset($_POST['guardar'])){
   $cui = $_POST['cui'];
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $fechanac = $_POST['fechanac'];
   $direc = $_POST['direccion'];
   $nombrep = $_POST['nombrep'] ;
   $nombrem = $_POST['nombrem'] ;
   $email = $_POST['email'] ;
    
   $query = "INSERT INTO  usuarios (cui,nombre,apellidos,fecha_nac,direc,nombre_padre,nombre_madre,email) VALUES (' $cui','$nombre','$apellido','$fechanac','$direc','$nombrep','$nombrem','$email')";

   $result = mysqli_query($conn,$query);

   if(!$result){
    die("Query Failed");
   }

   echo'<script type="text/javascript">
   alert("Usuario insertado Exitosamente");
  window.location.href="index.php";
       </script>';       
}

?>