<?php
require_once 'models/Cliente.php';


class ClienteController {

    public function cadastrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cliente = new Cliente();
            $cliente->cpf = $_POST['cpf'];
            $cliente->nome = $_POST['nome'];
            $cliente->dtnasc = $_POST['dtnasc'];
            $cliente->email = $_POST['email'];
            $cliente->senha = $_POST['senha'];

            if ($cliente->cadastrar()) {
                include 'views/cliente_sucesso.php';
            } else {
                echo "Erro ao cadastrar cliente.";
            }
        } else {
            include 'views/cliente_form.php';
        }
    }

    public function listar() {
        $cliente = new Cliente();
        $clientes = $cliente->listarTodos();

        include 'views/cliente_lista.php';
    }

    public function deletar() {
        if (isset($_GET['id'])) {
            $cliente = new Cliente();
            $cliente->id = $_GET['id'];

            if ($cliente->deletar()) {
                header("Location: index.php?controller=cliente&action=listar");
            } else {
                echo "Erro ao deletar cliente.";
            }
        }
    }

    public function editar() {
        $cliente = new Cliente();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cliente->id = $_POST['id'];
            $cliente->nome = $_POST['nome'];
            $cliente->email = $_POST['email'];

            if ($cliente->editar()) {
                header("Location: index.php?controller=cliente&action=listar");
            } else {
                echo "Erro ao editar cliente.";
            }
        } else {
            if (isset($_GET['id'])) {
                $cliente->id = $_GET['id'];
                $dados_cliente = $cliente->buscarPorId();

                if ($dados_cliente) {
                    include 'views/cliente_editar.php';
                } else {
                    echo "Cliente não encontrado.";
                }
            }
        }
    }
}
?>
