<?php
require "../Controller/Controller.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $controlador = new Controlador();
    if ($controlador->alterarCliente($cpf, $nome, $email)) {
        echo "Cliente alterado com sucesso!";
    } else {
        echo "Erro ao alterar cliente.";
    }
}
?>
