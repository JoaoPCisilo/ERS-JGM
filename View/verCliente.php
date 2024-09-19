<?php
    require "../Controller/Controller.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <!-- Biblioteca do Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Link do Css -->
    <link rel="stylesheet" href="styleVerCliente.css">

    <meta charset="UTF-8">
    <title>Visualizar Clientes</title>
</head>
<body>
    <h1>Clientes</h1>

    <?php
        $controlador = new Controlador();
        $listaClientes = $controlador->visualizarClientes(); // Agora retorna um mysqli_result

        // Verifica se a consulta retornou resultados
        if ($listaClientes && mysqli_num_rows($listaClientes) > 0) {
            // Itera sobre os resultados e gera o HTML para cada cliente
            while ($cliente = mysqli_fetch_assoc($listaClientes)) {
                echo "<section class=\"conteudo-bloco\">";
                echo "<h2>" . $cliente["cpf"] . " - " . $cliente["nome"] . "</h2>";
                echo "<p>Data de Nascimento: " . $cliente["dtnasc"] . "</p>";
                echo "<p>Email: " . $cliente["email"] . "</p>";

                // Formulário para alterar cliente
                echo "<form method='POST' action='../processamento/processamento.php'>";
                echo "<input type='hidden' name='cpf' value='" . $cliente['cpf'] . "'>";
                echo "<input type='text' name='nome' value='" . $cliente['nome'] . "' required>";
                echo "<input type='date' name='dtnasc' value='" . $cliente['dtnasc'] . "' required>";
                echo "<input type='email' name='email' value='" . $cliente['email'] . "' required>";
                echo "<input type='password' name='senha' placeholder='Nova senha' required>";
                echo "<input type='hidden' name='acao' value='alterar'>";
                echo "<button type='submit'>Alterar</button>";
                echo "</form>";

                // Formulário para excluir cliente
                echo "<form method='POST' action='../processamento/processamento.php'>";
                echo "<input type='hidden' name='cpf' value='" . $cliente['cpf'] . "'>";
                echo "<input type='hidden' name='acao' value='excluir'>";
                echo "<button type='submit'>Excluir</button>";
                echo "</form>";

                echo "</section>";
            }
        } else {
            echo "<p>Nenhum cliente encontrado.</p>";
        }
    ?>
</body>
</html>
