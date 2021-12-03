<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario pregunta 5</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        form { display: flex; flex-direction: column; max-width: 20vw; }
        label { margin-top: 10px; }
        form button { margin-top: 20px;}
    </style>
</head>
<body>
<h1>Formulario pregunta 5</h1>
<!--
Formulario por post que contiene toda la información solicitada.
La ejecución del formulario abre la página "result"
-->
<form method="post" action="result.php" enctype="multipart/form-data">
    <label>
        <input type="text" placeholder="Nombre" name="name">
    </label>
    <label>
        <input type="text" placeholder="Apellidos" name="surname">
    </label>
    <label>
        <input type="datetime-local" placeholder="Fecha de nacimiento" name="birthdate">
    </label>
    <label>Sube un archivo:
        <input type="file" name="file1" id="fileToUpload1" value=""/>
    </label>
    <label>Sube un segundo archivo:
        <input type="file" name="file2" id="fileToUpload2" value=""/>
    </label>

    <button type="submit">Enviar respuesta</button>
</form>

</body>
</html>