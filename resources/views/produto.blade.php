<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{route('produto.store')}}">
        @csrf
        Código:
        <input type="text" name="codigo">
        <br><br>
        Nome do Produto:
        <input type="text" name="nome" >
        <br>
        <br>
        Descrição
        <input type="text" name="descricao" >
        <br>
        <br>
        <input type="submit" class="botao" name="Salvar" value="Salvar">  
    </form>

</body>
</html>