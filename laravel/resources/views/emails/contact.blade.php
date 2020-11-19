<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato via site</title>
</head>
<body>
    
    <p><b>Nome:</b> {!! $data['name'] !!}</p>
    <p><b>E-mail:</b> {!! $data['email'] !!}</p>
    <p><b>Endereço:</b> {!! $data['address'] !!}</p>

    <h3>{!! $data['subject'] !!}</h3>
    
    <h5>Mensagem</h5>
    {!! nl2br($data['comment']) !!}
    
</body>
</html>