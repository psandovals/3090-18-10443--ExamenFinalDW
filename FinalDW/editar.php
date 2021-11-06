<?php 
include("db.php");

if(isset($_GET['id'])){

$id = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id = '$id'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);

    $cui = $row['cui'];
    $nombre = $row['nombre'];
    $apellido = $row['apellidos'];
    $fechanac = $row['fecha_nac'];
    $direc = $row['direc'];
    $nombrep = $row['nombre_padre'] ;
    $nombrem = $row['nombre_madre'] ;
    $email = $row['email'];
  }
}

if(isset($_POST['update'])){

    $id = $_GET['id'];
    $cui = $_POST['cui'];
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $fechanac = $_POST['fechanac'];
   $direc = $_POST['direccion'];
   $nombrep = $_POST['nombrep'] ;
   $nombrem = $_POST['nombrem'] ;
   $email = $_POST['email'] ;
    
    $query = "UPDATE usuarios SET cui = '$cui' , nombre = '$nombre', apellidos = '$apellido', fecha_nac = '$fechanac', direc = '$direc', nombre_padre = '$nombrep', nombre_madre = '$nombrem', email = '$email' WHERE id = $id";
    mysqli_query($conn,$query);

    echo'<script type="text/javascript">
    alert("Usuario Actualizado Exitosamente");
   window.location.href="index.php";
        </script>';       



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="estilos.css">
    <title>EDITAR USUARIO</title>
</head>
<body>
    <!-- FORMULARIO -->
    <div class="contenedor-form">
        <!-- Inicio de Formulario -->
        <form id="form" class="form" action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">

            <h1 class="titulo-form">Formulario</h1>
            <!-- CONTENEDOR ENTRADA CUI -->
            <div class="grupo">
                <input type="number" class="campo" name="cui" id="cui" placeholder=" "  required />
                <span class="barra"></span>
                <label for="" class="etiqueta">CUI</label>
            </div>
            <!-- CONTENEDOR ENTRADA NOMBRES -->
            <div class="grupo">
                <input type="text" class="campo" name="nombre" id="nombre" placeholder=" " required />
                <span class="barra"></span>
                <label for="" class="etiqueta">Nombre</label>
            </div>

            <!-- CONTENEDOR ENTRADA APELLIDOS -->
            <div class="grupo">
                <input type="text" class="campo" name="apellido" id="apellido" placeholder=" " required /><span class="barra"></span>
                <label for="" class="etiqueta">Apellidos</label>
            </div>

            <!-- CONTENEDOR ENTRADA FECHA NACIMIENTO -->
            <div class="grupo">
                <input type="date" class="campo" name="fechanac" id="fechanac" placeholder=" " />
                <span class="barra"></span>
                <label for="" class="etiqueta">Fecha Nacimiento</label>
            </div>

            <!-- CONTENEDOR ENTRADA DIRECCIÓN -->
            <div class="grupo">
                <input type="text" class="campo" name="direccion" id="direccion" placeholder=" " />
                <span class="barra"></span>
                <label for="" class="etiqueta">Direccion</label>
            </div>
            <!-- CONTENEDOR ENTRADA NOMBRE PADRE -->
            <div class="grupo">
                <input type="text" class="campo" name="nombrep" id="nombrep" placeholder=" " required />
                <span class="barra"></span>
                <label for="" class="etiqueta">Nombre del Padre</label>
            </div>
            <!-- CONTENEDOR ENTRADA NOMBRE MADRE -->
            <div class="grupo">
                <input type="text" class="campo" name="nombrem" id="nombrem" placeholder=" " required />
                <span class="barra"></span>
                <label for="" class="etiqueta">Nombre de la Madre</label>
            </div>
            <!-- Contenedor de Entrada de Email -->
            <div class="grupo">
                <input type="email" class="campo" name="email" id="email" placeholder=" " required />
                <span class="barra"></span>
                <label for="" class="etiqueta">Email</label>
            </div>

            <!-- Boton de Registro de Formulario -->
            <button type="submit" class="enviar" name="update">Actualizar</button></button>
            <!-- Texto de Advertencias -->
            <!-- <p class="warnings" id="warnings"></p> -->
            <p class="warnings" id="warnings"></p>

        </form>
    </div>

</body>
</html>