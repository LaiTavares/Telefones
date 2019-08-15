<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{isset($pessoa) ? url('/editar/'.$pessoa->id) : url('/form') }}" method="POST">
    @if(isset($pessoa))
        @method('put')
    @endif

    @csrf

    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="{{isset($pessoa) ? $pessoa->nome : '' }}"><br><br>
    
    <label for="telefone[]">Primeiro telefone:</label>
    <input type="text" name="telefone[{{isset($pessoa) ? $pessoa->telefones[0]->id : '' }}][numero]" value="{{isset($pessoa) ? $pessoa->telefones[0]->numero : '' }}"><br><br>

    <label for="telefone[]">Segundo telefone:</label>
    <input type="text" name="telefone[{{isset($pessoa) ? $pessoa->telefones[1]->id : '' }}][numero]" value="{{isset($pessoa) ? $pessoa->telefones[1]->numero : '' }}"><br><br>

    <label for="telefone[]">terceiro telefone:</label>
    <input type="text" name="telefone[{{isset($pessoa) ? $pessoa->telefones[2]->id : '' }}][numero]" value="{{isset($pessoa) ? $pessoa->telefones[2]->numero : '' }}"><br><br>

    <button type="submit">Enviar</button>

</form>


</body>
</html>