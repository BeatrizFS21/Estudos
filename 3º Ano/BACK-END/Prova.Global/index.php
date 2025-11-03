<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova Global</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <main>
        <h1>O Carrinho de compras</h1>
        <form action="$_SERVER" method="get">
            <label for="preco">Qual o preço do produto desejado?</label>
            <input type="number" name="preco" id="preco" min="1" step="0.01" required value="<?=$produto?>">

            <label for="quantia">Qual a quantidade desejada?</label>
            <input type="number" name="quantia" id="quantia" min="1" step="0.01" required value="<?=$quantia?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>--- Orçamento PC-Pronto ---</h2>
        <p>Produto: </p>

    </section>
    
</body>
</html>