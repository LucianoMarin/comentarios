<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../rutas.php');
rutas::rutas();





?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>

    <link href="<?php echo css ?>" rel="stylesheet" />

</head>

<body>
    <div class="modulo-comentarios">
        <div class="cabecera">
        <img class="avatar" src="../assets/imagenes/Tux.png"> <label class="usuario">Luciano - moderador</label>
        </div>
        <div class="opciones-comentarios">
            <button name="b" class="botones">B</button>
            <button class="botones">i</button>
            <button class="botones">imagen</button>
            <button class="botones">url</button>
        </div>
        <textarea class="comentario" ></textarea>

        <input type="submit">

    </div>




    <script src="<?php echo javascript ?>"></script>

</body>

</html>