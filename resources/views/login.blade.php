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
        Login:
        <input type="text" name="login" id="login">
        <br><br>
        Senha:
        <input type="password" name="senha" >
        <br>
        <br>
        <input type="submit" class="botao" name="entrar" value="Entrar">  
    </form>

</body>
</html>