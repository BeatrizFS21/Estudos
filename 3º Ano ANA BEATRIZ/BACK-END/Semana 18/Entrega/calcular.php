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
</head>
<body>
    <div class="resultado">
        <h2>--- Relatório de Pintura ---</h2>
        <p>Para uma parede de <strong><?php echo $largura; ?>m</strong> de largura e <strong><?php echo $altura; ?>m</strong> de altura:</p>
        <p>Área total: <strong><?php echo number_format($area, 2, ',', '.'); ?> m²</strong></p>
        <p>Serão necessários <strong><?php echo number_format($tinta, 2, ',', '.'); ?> litros</strong> de tinta.</p>
    </div>
</body>
</html>