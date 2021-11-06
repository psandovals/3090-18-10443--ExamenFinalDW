kk<?php include('db.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK DE HOJA DE ESTILO -->
    <link rel="stylesheet" type="" href="estilos.css">
    <title>CRUD FORM</title>
</head>

<body>

    <!-- FORMULARIO -->
    <div class="contenedor-form">
        <!-- Inicio de Formulario -->
        <form id="form" class="form" action="insertar.php" method="POST">

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
            <button type="submit" class="enviar" name="guardar">Guardar</button></button>
            <!-- Texto de Advertencias -->
            <!-- <p class="warnings" id="warnings"></p> -->
            <p class="warnings" id="warnings"></p>

        </form>
    </div>
    <!-- CONTENEDOR TABLA DE DATOS -->
    <div>
    
    <table class="tabla">
        <thead>
            <tr>
                <th>CUI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>Dirección</th>
                <th>Nombre Padre</th>
                <th>Nombre Madre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- SELECT HACIA BASE DE DATOS -->
        <?php          
                    $query = "SELECT * FROM usuarios";
                    $result_task = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result_task)) { ?>

                        <tr>
                            <td><?php echo $row['cui'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellidos'] ?></td>
                            <td><?php echo $row['fecha_nac'] ?></td>
                            <td><?php echo $row['direc'] ?></td>
                            <td><?php echo $row['nombre_padre'] ?></td>
                            <td><?php echo $row['nombre_madre'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $row['id']; ?>" >
                                    Editar

                                </a>
                                <a href="eliminar.php?cui=<?php echo $row['cui']; ?>" >
                                    Eliminar
                                </a>

                            </td>

                        </tr>

                    <?php } ?>
        </tbody>
    </table> 
    </div>
    

    <script src="verificar.js"></script>
</body>

</html>