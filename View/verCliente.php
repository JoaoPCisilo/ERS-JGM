<?php
    // Inclui o arquivo que define a classe Controlador
    require "../Controller/Controller.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Define a codificação de caracteres para o documento como UTF-8 -->
    <meta charset="UTF-8">
</head>
<body>
    <h1>Clientes</h1>

    <?php
        $controlador = new Controlador();
        $listaClientes = $controlador->visualizarClientes(); 
        echo $listaClientes; // Aqui você pode exibir a lista de clientes
    ?>

    <!-- Formulário para alterar cliente -->
    <h2>Alterar Cliente</h2>
    <form method="POST" action="../Model/alterar_cliente.php">
        <label>CPF do Cliente: </label>
        <input type="number" name="id" required><br>
        <label>Nome: </label>
        <input type="text" name="nome" required><br>
        <label>Email: </label>
        <input type="email" name="email" required><br>
        <button type="submit">Alterar</button>
    </form>

    <!-- Formulário para excluir cliente -->
    <h2>Excluir Cliente</h2>
    <form method="POST" action="../Model/excluir_cliente.php">
        <label>CPF do Cliente: </label>
        <input type="number" name="id" required><br>
        <button type="submit">Excluir</button>
    </form>
</body>
</html>
