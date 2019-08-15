<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th colspan=3>Telefone</th>
            <th>Ação</th>
        </tr>
            
        @foreach($pessoas as $pessoa)
            <tr>
                <td>{{$pessoa->nome}}</td>
                @foreach($pessoa->telefones as $telefone)
                <td>{{$telefone->numero}}</td> 
                @endforeach
                <td>
                <button><a href="{{url('/editar/'.$pessoa->id)}}">Editar</a></button>
                <button><a href="{{url('/deletar/'.$pessoa->id)}}">Apagar</a></button>
                </td>
            </tr>
        @endforeach

    </table>

    <button><a href="{{url('/form')}}">Cadastrar Pessoa</a></button><br>
    <h1>Pessoas deletadas</h1>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th colspan=3>Telefone</th>
            <th>Ação</th>
        </tr>
            
        @foreach($pessoasDeletadas as $pessoa)
            <tr>
                <td>{{$pessoa->nome}}</td>
                @foreach($pessoa->telefones as $telefone)
                <td>{{$telefone->numero}}</td> 
                @endforeach
                <td>
                <button><a href="{{url('/editar/'.$pessoa->id)}}">Editar</a></button>
                <button><a href="{{url('/deletar/'.$pessoa->id)}}">Ativar</a></button>
                </td>
            </tr>
        @endforeach

    </table>
</body>
</html>