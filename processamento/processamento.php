<?php

session_start();
require('../Controller/Controller.php');

// Cria uma instância do controlador
$controlador = new Controlador();

// Cadastro de Cliente
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
    header('Location:../View/verCliente.php');
    die();
}

?>
