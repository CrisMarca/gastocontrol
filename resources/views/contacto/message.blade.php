<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de : {{ $msg['nombre'] }} - {{ $msg['apellido'] }}</p>
    <p><strong>Direccion : {{ $msg['direccion'] }}</strong></p>    
    <p><strong>Cedula : {{ $msg['ci'] }}</strong></p>    
    <p><strong>Celular : {{ $msg['celular'] }}</strong></p>    
</body>
</html>