<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de vendas</title>
</head>
<body>
    <h1>Cadastro de Vendas</h1>

    <form action="{{ route('vendas.store') }}" method="POST">
        @csrf
        <p>
            Nome da venda: <input type="text" name="nome"/>
        </p>
        
        <button type="submit">Gravar</button>

    </form>
</body>
</html>