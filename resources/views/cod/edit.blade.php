<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alteração de codigo</title>
</head>
<body>
    <h1>Formulario de alteração de Codigo</h1>

    <form action="{{ route('cod.update', $cod['id']) }}" method="POST">
        @csrf
        @method('PUT')
  
        <p>
            Codigo: <input type="text" name="numero" value="{{ $cod['numero']}}" />
            Descrição: <input type="text" name="nome" value="{{ $cod['nome']}}" />
        </p>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>