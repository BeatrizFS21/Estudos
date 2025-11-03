<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrega: Roteiro para Shorts</title>
</head>
<body>
<?php
// Atividade: Roteiro para Shorts - Formulários em PHP
// Saída formatada em HTML

echo "<h1>Roteiros para Shorts - Formulários em PHP</h1>";

// Ideia 1
echo "<h2>Ideia 1: Ciclo do Formulário (Request → PHP → Resposta)</h2>";
echo "<p><strong>Gancho:</strong> Apertei ENVIAR… e agora, o que acontece nos bastidores?</p>";
echo "<p><strong>Conceito:</strong> Fluxo do submit e leitura com superglobais: \$_GET, \$_POST e \$_REQUEST.</p>";
echo "<p><strong>Analogia/Exemplo:</strong> Correio interno: a página é o remetente, o botão 'Enviar' é o carteiro, e o PHP é a central que abre o envelope e lê os dados.</p>";

// Ideia 2
echo "<h2>Ideia 2: Segurança básica - Validação e Sanitização</h2>";
echo "<p><strong>Gancho:</strong> Form sem filtro = porta aberta para bugs.</p>";
echo "<p><strong>Conceito:</strong> Validar e sanitizar entradas no servidor com filter_input() e escapar saídas com htmlspecialchars().</p>";
echo "<p><strong>Analogia/Exemplo:</strong> Peneira + luvas: a peneira é o filter_input() que retém sujeira, as luvas são o htmlspecialchars() que evitam cortes (XSS).</p>";

// Ideia 3
echo "<h2>Ideia 3: Upload de Arquivos sem dor de cabeça</h2>";
echo "<p><strong>Gancho:</strong> Por que meu upload não funciona? Spoiler: faltou o 'enctype'.</p>";
echo "<p><strong>Conceito:</strong> enctype='multipart/form-data', array \$_FILES, checagens de tamanho/tipo e move_uploaded_file().</p>";
echo "<p><strong>Analogia/Exemplo:</strong> Balcão de entregas: você declara o pacote certo (enctype correto), o atendente confere peso e conteúdo (validações) e só então leva ao depósito final (pasta destino).</p>";
?>

</body>
</html>