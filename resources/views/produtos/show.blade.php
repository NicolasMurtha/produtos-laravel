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

    <title>Informações do produto</title>
</head>

<body>
    <h1>Informação de produto</h1>

    <p>
        <a href="{{route('cod.index')}}">Codigos </a>
        <span>/</span>
        <a href="{{route('setores.index')}}">Setores</a>
        <span>/</span>
        <a href="{{route('vendas.index')}}">Vendedor</a>
        <span>/</span>
        <a href="{{route('produtos.excluidos')}}">Excluídos</a>
        <span>/</span>
        <a href="{{route('produtos.index')}}">Produtos</a>
    </p>


    <table border = "1" width = "80%">
<thead>
    <tr>
        <td><h5>Produto</h5></td>
        <td><h5>Tipo</h5></td>
        <td><h5>Estoque</h5></td>
        <td><h5>Codigo</h5></td>
        <td><h5>Descrição do codigo</h5></td>
        <td><h5>Setor</h5></td>
        
    </tr>
    </thead>

<tbody>
    <tr>
        <td>{{ $produto['nome']}}</td>
        <td>{{ $produto['tipo']}}</td>
        <td>{{ $produto['estoque']}}</td>
        <td>{{ $produto->cod->numero}}</td>
        <td>{{ $produto->cod->nome}}</td>
        <td>{{ $produto->setor->nome}}</td>
    </tr>

    </tbody>
    </table>

    <tr>
        <td><h5>Vendedores</h5></td>
        </tr>
        @foreach ($produto->vendas as $vendas)
        <li>
        {{ $vendas->nome }}
        </li>
        @endforeach

        <td><a type="button" class="btn btn-success btn-sm" href="{{}}">Alterar vendedores</a></td>

</body>

</html>