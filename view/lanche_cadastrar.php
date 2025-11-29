<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanche :: Cadastrar</title>
    <link href="css/estilo.css" rel="stylesheet" />
</head>

<body>
    <main>
        <form action="control/lanche_inserir.php" method="post">
            <label>Nome do lanche</label>
            <input type="text" name="txtNome" id="">
            <label>Ingredientes do lanche</label>
            <input type="text" name="txtIngredientes" id="">
            <label>Preço do lanche</label>
            <input type="text" name="txtPreco" id="">
            <button type="submit">Cadastrar</button>
        </form>

    </main>

</body>

</html>