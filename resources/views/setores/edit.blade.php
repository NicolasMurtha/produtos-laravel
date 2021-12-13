<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alteração de setor</title>
</head>
<body>
    <h1>Formulario de alteração de setores</h1>

    <form action="{{ route('setores.update', $setor['id']) }}" method="POST">
        @csrf
        @method('PUT')
  
        <p>
            Nome do setor: <input type="text" name="nome" value="{{ $setor['nome']}}" />
            Codigo do setor: <input type="text" name="tipo" value="{{ $setor['id']}}"/>

        </p>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>