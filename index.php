<?php

// Inicia a sessão PHP para permitir o uso de variáveis de sessão
session_start();

// Verifica se a variável de sessão 'estaLogado' está definida
if (isset($_SESSION['estaLogado'])) {
    
    // Verifica se a variável de sessão 'estaLogado' é TRUE
    if ($_SESSION['estaLogado'] == TRUE) {
        // Redireciona para a página de visualização de clientes se o usuário estiver logado
        header('Location: View/verCliente.php');
    } else {
        // Redireciona para a página de cadastro de cliente se o usuário não estiver logado
        header('Location: View/cadastroCliente.php');
    }
} else {
    // Redireciona para a página de cadastro de cliente se a variável de sessão 'estaLogado' não estiver definida
    header('Location: View/cadastroCliente.php');
}

?>
