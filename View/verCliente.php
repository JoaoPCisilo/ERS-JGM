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

    <!-- Seção principal para visualizar clientes -->
    <section class="conteudo-visualizar">
        <!-- Caixa de visualização de clientes -->
        <section class="conteudo-visualizar-box">
            <!-- Título da página de visualização de clientes -->
            <h1>Clientes</h1>
            
            <?php
                // Cria uma instância do controlador
                $controlador = new Controlador();
                
                // Obtém a lista de clientes a partir do controlador
                $listaClientes = $controlador->visualizarClientes();
                
                // Exibe a lista de clientes
                echo $listaClientes;
            ?>
        </section>
    </section>

</body>
</html>
