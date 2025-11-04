<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Algum Titulo</h1>
    @if(10>5)
        "deu certo"
    @endif
    <br>
    @if($nome != "Matheus")
    <p>{{$nome}}</p>
    @elseif($nome == "Julio")
    <p>"o nome é Julio"</p>
    @else
    {{$nome}}. e ele tem .{{$idade}}. anos
    @endif

</body>
</html>