<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
     
    <form action="/cadastrar-produto" method="post">
        @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome" placeholder="Nome do produto">
        <br><br>
        <label for="lblValor">Valor:</label>
        <input type="text" name="valor" placeholder="Valor do produto">
        <br><br>
        <label for="lblQuantidade">Quantidade:</label>
        <input type="text" name="estoque" placeholder="Estoque do produto">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>