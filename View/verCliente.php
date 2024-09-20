<?php
    require "../Controller/Controller.php"; // Inclui o arquivo Controller.php que contém a lógica para manipulação de clientes
?>

<!DOCTYPE html>
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>

    <!-- Biblioteca do Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <!-- Importa o CSS do Bootstrap para estilização -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Importa o JavaScript do Bootstrap para funcionalidade interativa -->
    
    <!-- Link do Css -->
    <link rel="stylesheet" href="styleVerCliente.css"> <!-- Link para o arquivo CSS personalizado -->

    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <title>Visualizar Clientes</title> <!-- Define o título da página no navegador -->

</head>
<body>
    <div class="header">
        <img src="../imagens/teste.png" alt="Logo da Locadora" class="logo"> <!-- Exibe a logo da locadora -->
    </div>

    <?php

        $controlador = new Controlador(); // Cria uma nova instância da classe Controlador
        $listaClientes = $controlador->visualizarClientes(); // Chama o método que retorna a lista de clientes, armazenando o resultado

        // Verifica se a consulta retornou resultados
        if ($listaClientes && mysqli_num_rows($listaClientes) > 0) { // Confere se há clientes retornados
            // Itera sobre os resultados e gera o HTML para cada cliente
            while ($cliente = mysqli_fetch_assoc($listaClientes)) {
                echo "<section class=\"conteudo-bloco\">";
                echo "<h2>" . $cliente["cpf"] . " - " . $cliente["nome"] . "</h2>";
                echo "<p>Data de Nascimento: " . $cliente["dtnasc"] . "</p>";
                echo "<p>Email: " . $cliente["email"] . "</p>";

                // Formulário para alterar cliente
                echo "<form method='POST' action='../processamento/processamento.php'>"; // Início do formulário para alteração
                echo "<input type='hidden' name='cpf' value='" . $cliente['cpf'] . "'>"; // Campo oculto para armazenar CPF
                echo "<input type='text' name='nome' value='" . $cliente['nome'] . "' required>"; // Campo para alterar o nome
                echo "<input type='date' name='dtnasc' value='" . $cliente['dtnasc'] . "' required>"; // Campo para alterar a data de nascimento
                echo "<input type='email' name='email' value='" . $cliente['email'] . "' required>"; // Campo para alterar o email
                echo "<input type='password' name='senha' placeholder='Nova senha' required>"; // Campo para nova senha
                echo "<input type='hidden' name='acao' value='alterar'>"; // Campo oculto para identificar a ação de alteração
                echo "<button type='submit'>Alterar</button>"; // Botão para submeter o formulário de alteração
                echo "</form>"; // Final do formulário de alteração

                // Formulário para excluir cliente
                echo "<form method='POST' action='../processamento/processamento.php'>"; // Início do formulário para exclusão
                echo "<input type='hidden' name='cpf' value='" . $cliente['cpf'] . "'>"; // Campo oculto para armazenar CPF
                echo "<input type='hidden' name='acao' value='excluir'>"; // Campo oculto para identificar a ação de exclusão
                echo "<button type='submit'>Excluir</button>"; // Botão para submeter o formulário de exclusão
                echo "</form>"; // Final do formulário de exclusão

                echo "<form method='GET' action='cadastroCliente.php'>"; // Início do formulário para voltar à página de cadastro
                echo "<button type='submit'>Voltar</button>"; // Botão para submeter o formulário e voltar
                echo "</form>"; // Final do formulário

                echo "</section>";
            }
        } else {
            echo "<p>Nenhum cliente encontrado.</p>"; // Mensagem caso não haja clientes
        }
    ?>
</body>
</html>