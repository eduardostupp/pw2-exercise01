<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Enviados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Dados Enviados</h1>
        <?php
        // Exibindo os dados enviados pelo formulário
        echo "<p><strong>Nome:</strong> " . $_POST['nome'] . "</p>";
        echo "<p><strong>Telefone:</strong> " . $_POST['telefone'] . "</p>";
        echo "<p><strong>E-mail:</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Mensagem:</strong> " . $_POST['mensagem'] . "</p>";

        // Exibindo o cabeçalho da requisição HTTP e o método utilizado
        echo "<h2>Cabeçalho da Requisição</h2>";
        foreach (getallheaders() as $name => $value) {
            echo "<p><strong>$name:</strong> $value</p>";
        }
        echo "<p><strong>Método:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";
        ?>
    </div>
</body>
</html>
