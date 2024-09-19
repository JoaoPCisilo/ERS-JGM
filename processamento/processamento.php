<?php
session_start();
require('../Controller/Controller.php');

// Cria uma instância do controlador
$controlador = new Controlador();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se o formulário é para cadastrar cliente
    if (isset($_POST['inputCPF']) && isset($_POST['inputNome']) &&
        isset($_POST['inputDataNasc']) && isset($_POST['inputEmail']) &&
        isset($_POST['inputSenha'])) {

        // Obtém os dados do formulário
        $cpf = $_POST['inputCPF'];
        $nome = $_POST['inputNome'];
        $dtnasc = $_POST['inputDataNasc'];
        $email = $_POST['inputEmail'];
        $senha = $_POST['inputSenha'];

        // Chama o método do objeto $controlador para inserir um novo cliente
        $controlador->inserirCliente($cpf, $nome, $dtnasc, $email, $senha);

        // Redireciona para a página de visualização de clientes
        header('Location: ../View/verCliente.php');
        exit(); // Certifica-se que o script será interrompido aqui
    }

    // Verificar se o formulário é para alterar ou excluir
    if (isset($_POST['acao'])) {
        $acao = $_POST['acao'];
        $cpf = $_POST['cpf'];

        // Processa a ação de acordo com o valor enviado
        if ($acao === 'alterar') {
            // Dados do formulário para alterar cliente
            $nome = $_POST['nome'];
            $dtnasc = $_POST['dtnasc'];
            $email = $_POST['email'];

            // Chama o método de alterar cliente
            $controlador->alterarCliente($cpf, $nome, $dtnasc, $email);
        } elseif ($acao === 'excluir') {
            // Chama o método de excluir cliente
            $controlador->excluirCliente($cpf);
        }

        // Redireciona de volta para a página de visualização de clientes
        header("Location: ../View/verCliente.php");
        exit();
    }
}
