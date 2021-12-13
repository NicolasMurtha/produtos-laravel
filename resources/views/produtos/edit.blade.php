<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alteração de produto</title>
</head>
<body>
    <h1>Formulario de alteração de produto</h1>

    <form action="{{ route('produtos.update', $produto['id']) }}" method="POST">
        @csrf
        @method('PUT')
  
        <p>
            Nome do produto: <input type="text" name="nome" value="{{ $produto['nome']}}" />
            Tipo de produto: <input type="text" name="tipo" value="{{ $produto['tipo']}}"/>
            Estoque do produto: <input type="text" name="estoque" value="{{ $produto['estoque']}}"/>
            Setor:
            <select name="setor" id="setor">
            <option value=" {{ $produto['setor'] }}" >{{$produto->setor->nome}}</option>
            </select>
        </p>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>