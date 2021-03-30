<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Mensaje Recibido con exíto</title>
</head>
<body>
    <p>Hola! {{ $contact->name }}</p>
    <p>telefono: {{ $contact->phone }}</p>
    <p>Mensanje: {{ $contact->message }}</p>
    <p>mensaje recibido: yo mismo</p>
    <p>asunto: algo en particular</p>

</body>
</html>
