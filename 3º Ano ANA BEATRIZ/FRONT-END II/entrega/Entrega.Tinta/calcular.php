<?php
// Verifica se o formulário foi enviado usando o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largura = floatval($_POST['largura']);
    $altura = floatval($_POST['altura']);
    $area = $largura * $altura;
    $tinta = $area / 2;
} else {
    // Se a página for acessada diretamente, redireciona de volta para o formulário
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Tinta</title>
    <link rel="stylesheet" href="css/estilo.css">
    
    <style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Epunda+Slab:ital,wght@0,300..900;1,300..900&family=Lexend:wght@100..900&family=Libertinus+Keyboard&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Story+Script&display=swap');
</style>
    <style>
    /* Estilo para o corpo da página */
body {
    
    margin: 0;
    padding: 0;
    background-color: #f0f2f5;
    background-image: url('tintaaa.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Estilo para o resultado (relatório) */
.resultado {
    background-color: rgba(255, 255, 255, 0.9); /* Fundo com transparência */
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

.resultado h1 {
    color: 	#000000;
    margin-bottom: 24px;
}

.resultado p {
    color: #555;
    font-size: 18px;
    line-height: 1.6;
}

.resultado p strong {
    color: #333;
}
    </style>
</head>
<body>
    <div class="resultado">
        <h1>Relatório de Pintura</h1>
        <p>Para uma parede de <strong><?php echo $largura; ?>m</strong> de largura e <strong><?php echo $altura; ?>m</strong> de altura:</p>
        <p>Área total: <strong><?php echo number_format($area, 2, ',', '.'); ?> m²</strong></p>
        <p>Serão necessários <strong><?php echo number_format($tinta, 2, ',', '.'); ?> litros</strong> de tinta.</p>
    </div>
</body>
</html>