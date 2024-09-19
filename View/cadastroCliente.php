<!DOCTYPE html>
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <!-- Define a codificação de caracteres para o documento como UTF-8 -->
    <meta charset="UTF-8">
    
    <!-- Inclui a fonte Roboto do Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
    <!-- Inclui o arquivo CSS para estilização da página -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
    <!-- Define o ícone da página (favicon) -->
    <link rel="icon" href="../img/logo.png" type="image/png">

    <!-- Biblioteca do Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Importa o CSS do Bootstrap para estilização e layout responsivo -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Importa o JavaScript do Bootstrap para funcionalidades interativas -->

    <!-- Link do Css personalizado para a página de cadastro -->
    <link rel="stylesheet" href="styleCadastroCriente.css">

    <!-- Define o título da página que aparece na aba do navegador -->
    <title>Xhopii - Cadastro Cliente</title>
</head>
<body>

    <div class="header">
        <img src="../imagens/teste.png" alt="Logo da Locadora" class="logo"> <!-- Exibe a logo da locadora -->
    </div>

    <!-- Seção principal para o conteúdo do cadastro -->
    <section class="conteudo-cadastro">
        <!-- Seção do formulário de cadastro -->
        <section class="conteudo-formulario-cadastro">
            <!-- Formulário para o cadastro de um novo cliente -->
            <form method="POST" action="../processamento/processamento.php"> <!-- Define o método POST e o arquivo de processamento -->
                <!-- Rótulo para o formulário de cadastro -->
                <label for="inputCPF">Cadastrar Cliente</label><br>

                <!-- Campo de entrada para o CPF do cliente -->
                <input type="text" id="inputCPF" placeholder="CPF" name="inputCPF" required><br>
                
                <!-- Campo de entrada para o nome do cliente -->
                <input type="text" id="inputNome" placeholder="Nome" name="inputNome" required><br>
                
                <!-- Campo de entrada para a data de nascimento do cliente -->
                <input type="date" id="inputDataNasc" placeholder="Data Nascimento" name="inputDataNasc" required><br>
                
                <!-- Campo de entrada para o email do cliente -->
                <input type="email" id="inputEmail" placeholder="Email" name="inputEmail" required><br>
                
                <!-- Campo de entrada para a senha do cliente -->
                <input type="password" id="inputSenha" placeholder="Senha" name="inputSenha" required><br>
                
                <!-- Botão de envio do formulário -->
                <input id="botao" type="submit" value="Cadastrar"> <!-- Botão para enviar os dados do formulário -->
            </form>
        </section>
    </section>

    <!-- Seção de rodapé com os nomes dos responsáveis -->
    <footer>
        <h1>Gustavo Henrique Bispo Costa, Matheus Henrique da Conceição Bispo, João Luiz Souza Pereira e João Pedro de Souza Cisilo </h1> <!-- Exibe os nomes dos responsáveis -->
    </footer>
    
</body>
</html>