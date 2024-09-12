<?php
require "../Controller/Controller.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];

    $controlador = new Controlador();
    if ($controlador->excluirCliente($cpf)) {
        echo "Cliente excluído com sucesso!";
    } else {
        echo "Erro ao excluir cliente.";
    }
}
?>
