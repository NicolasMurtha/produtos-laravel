<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de setores</title>
</head>
<body>
    <h1>Cadastro de Setores</h1>

    <form action="{{ route('setores.store') }}" method="POST">
        @csrf
        <p>
            Nome do Setor: <input type="text" name="nome"/>
            Codigo do Setor: <input type="text" name="id"/>
        </p>
        
        <button type="submit">Gravar</button>

    </form>
</body>
</html>