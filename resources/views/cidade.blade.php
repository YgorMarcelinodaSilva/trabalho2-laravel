<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{route('login.store')}}">
        @csrf
        Código:
        <input type="text" name="codigo">
        <br><br>
        Nome da Cidade:
        <input type="text" name="nomeDaCidade" >
        <br>
        <br>
        Estado
        <input type="text" name="estado" >
        <br>
        <br>
        <input type="submit" class="botao" name="Salvar" value="Salvar">  
    </form>

</body>
</html>