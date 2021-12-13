<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <p>
            Nome do produto: <input type="text" name="nome"/>
            Tipo de produto: <input type="text" name="tipo"/>
            Estoque do produto: <input type="text" name="estoque"/>
            Codigo do produto: <input type="text" name="cod"/>
            Setor do produto:
            <select name="setor" id="setor">
            @foreach($setor as $elemento)
            <option value=" {{ $elemento->id }}" >{{$elemento->nome}}</option>
            @endforeach
            </select>
        </p>
        
        <button type="submit">Gravar</button>

    </form>
</body>
</html>