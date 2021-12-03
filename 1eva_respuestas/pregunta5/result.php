<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario pregunta 5</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Formulario pregunta 5</h1>


<?php
/**
 * 3 variables para guardar archivos,
 * contabilizar archivos subidos y
 * almacenar en un array la información de los archivos que ha de salir por pantalla
 */

$directory = __DIR__ . "/uploads/";
$counter = 0;
$files = [];

/**
 * Para validar que un archivo se haya subido, se comprueba que el tamaño del valor del input sea mayor a 0.
 */
if(($_FILES['file1']['size'] > 0)) {
    $file_name = $_FILES['file1']['name'];
    $file_size = $_FILES['file1']['size'];
    $file_tmp = $_FILES['file1']['tmp_name'];

    //Se sube el archivo y sale un mensaje en pantalla. Se modifican las variables counter y se almacena información de los archivos en el array
    move_uploaded_file($file_tmp, $directory . $file_name);
    echo "Se ha subido correctamente un archivo en el PRIMER input";
    echo "<br>";
    $counter++;
    $files[$file_name] = $file_size;
}

if(($_FILES['file2']['size'] > 0)) {
    $file_name = $_FILES['file2']['name'];
    $file_size = $_FILES['file2']['size'];
    $file_tmp = $_FILES['file2']['tmp_name'];

    //Se sube el archivo y sale un mensaje en pantalla. Se modifican las variables counter y se almacena información de los archivos en el array
    move_uploaded_file($file_tmp, $directory . $file_name);
    echo "Se ha subido correctamente un archivo en el SEGUNDO input";
    echo "<br>";
    $counter++;
    $files[$file_name] = $file_size;
}

?>

    <!-- Se muestra la información general del resultado del formulario solicitada-->
<div>
    <p>Bienvenido <b><?php echo $_POST["name"] . " "; echo $_POST["surname"] . ".";?> </b></p>
    <p> Has nacido el <b><?php echo $_POST["birthdate"];?></b> y has subido <b><?php echo $counter; ?></b> archivo/s.</p>
    <?php
    if(count($files) > 0) {
        foreach ($files as $file => $size){
            echo "<li>$file: ";
            echo $file_size . " bytes</li>";
        }
    }
    ?>
</div>

</body>
</html>