<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{route('entrega.store')}}">
        @csrf
        Código do Produto:
        <input type="text" name="codigoProduto">
        <br><br>
        Cidade de Destino :
        <input type="text" name="cidade" >
        <br>
        <br>
        Observações da entrega
        <input type="text" name="observações" >
        <br>
        <br>
        <input type="submit" class="botao" name="Salvar" value="Salvar">  
    </form>

</body>
</html>