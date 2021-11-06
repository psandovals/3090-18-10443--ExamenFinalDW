<?php 


include("db.php");

if(isset($_GET['cui'])){

    $cui = $_GET['cui'];
    $query = "DELETE FROM usuarios WHERE cui = $cui";

    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Query Failed");
    }

    echo'<script type="text/javascript">
    alert("Usuario Eliminado Exitosamente");
   window.location.href="index.php";
        </script>';       

}

?>