<?php

// Inicia a sessão PHP para permitir o uso de variáveis de sessão
session_start();

// Verifica se a variável de sessão 'estaLogado' está definida
if (isset($_SESSION['estaLogado'])) {
    
    // Verifica se a variável de sessão 'estaLogado' é TRUE
    if ($_SESSION['estaLogado'] == TRUE) {
        // Verifica se a ação é de exclusão ou alteração de cliente
        if (isset($_GET['acao'])) {
            if ($_GET['acao'] == 'excluir') {
                // Redireciona para a página de exclusão de cliente
                header('Location: View/excluirCliente.php');
            } elseif ($_GET['acao'] == 'alterar') {
                // Redireciona para a página de alteração de cliente
                header('Location: View/alterarCliente.php');
            } else {
                // Redireciona para a página de visualização de clientes por padrão
                header('Location: View/verCliente.php');
            }
        } else {
            // Redireciona para a página de visualização de clientes por padrão
            header('Location: View/verCliente.php');
        }
    } else {
        // Redireciona para a página de cadastro de cliente se o usuário não estiver logado
        header('Location: View/cadastroCliente.php');
    }
} else {
    // Redireciona para a página de cadastro de cliente se a variável de sessão 'estaLogado' não estiver definida
    header('Location: View/cadastroCliente.php');
}

?>
