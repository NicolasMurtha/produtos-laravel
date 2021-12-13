<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Codigos</title>
</head>
<body>
    <h1>Cadastro de Codigos</h1>

    <form action="{{ route('cod.store') }}" method="POST">
        @csrf
        <p>
            Codigo: <input type="text" name="numero"/>
            Descrição: <input type="text" name="nome"/>
        </p>
        
        <button type="submit">Gravar</button>

    </form>
</body>
</html>