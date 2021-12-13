<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alteração de venda</title>
</head>
<body>
    <h1>Formulario de alteração de vendedor</h1>

    <form action="{{ route('vendas.update', $vendas['id']) }}" method="POST">
        @csrf
        @method('PUT')
  
        <p>
            Nome do vendedor: <input type="text" name="nome" value="{{ $vendas['nome']}}" />
        </p>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>