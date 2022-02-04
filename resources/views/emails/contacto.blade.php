<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje cliente Inspira Libertad</title>
</head>

<body>
    <h2 style="color: green; font-size: 2.5em">Inspira Libertad</h2>
    <hr>
    <br>
    <p><strong>Nombre: </strong> {{ $contacto["name"] }}</p>
    <p><strong>Email: </strong> {{ $contacto["email"] }}</p>
    <p><strong>Mensaje: </strong> {{ $contacto["message"] }}</p>
</body>

</html>