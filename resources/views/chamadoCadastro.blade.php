<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{route('chamado.store')}}">
        @csrf
        Número do chamado:
        <input type="text" name="id" id="id">
        <br><br>
        Titulo:
        <input type="text" name="titulo" id="titulo">
        <br><br>
        Descrição do Problema:
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" class="botao" name="enviar" value="Enviar">  
    </form>

</body>
</html>