<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Lista de Vendedor</title>
</head>

<body>
    <h1>Lista de Vendedor</h1>

    <p>
        <a href="{{route('cod.index')}}">Codigos </a>
        <span>/</span>
        <a href="{{route('setores.index')}}">Setores</a>
        <span>/</span>
        <a href="{{route('produtos.index')}}">Produtos</a>
    </p>

    <p>
        <a type="button" class="btn btn-primary btn-sm" href="{{route('vendas.create')}}">Novo vendedor</a>
    </p>

<form method="POST" action="">
    @csrf
    Pesquisar:<input type="text" name="pesquisa" placeholder="Pesquisar Titulo">
    <input type="submit" value="enviar">
</form>

    <table border = "1" width = "80%">

    <tr>
        <td><h5>Venda</h5></td>
    </tr>

    @foreach($vendas as $elemento)

    <tr>
        <td>{{ $elemento['nome']}}</td>

        <td>
            <form action="{{route('vendas.destroy', $elemento['id']) }}" method="POST">
                @csrf
                @method ('DELETE')

            <button type="submit" class="btn btn-danger btn-sm" >Excluir</button>
            </form>
        </td>
        <td><a type="button" class="btn btn-warning btn-sm" href="{{route('vendas.edit', $elemento['id'])}}">Alterar</a></td>
    </tr>

    </tr>

    @endforeach
    </table>
</body>

</html>