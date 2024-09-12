<?php

require_once "../Model/BancoDeDados.php";
require_once "../Model/Cliente.php";

/**
 * Classe Controlador responsável por gerenciar as ações relacionadas aos clientes.
 */
class Controlador {

    private $bancoDeDados; // Instância do banco de dados para operações com clientes.

    /**
     * Construtor da classe Controlador.
     * Inicializa a conexão com o banco de dados.
     */
    public function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost", "root", "", "locadora");
    }

    /**
     * Exibe a lista de clientes cadastrados no banco de dados.
     *
     * @return string HTML contendo os dados dos clientes.
     */
    public function visualizarClientes(){
        $listaClientes = $this->bancoDeDados->retornarClientes();
        $resultado = '';
        while($cliente = mysqli_fetch_assoc($listaClientes)){
            $resultado .= "<section class=\"conteudo-bloco\">";
            $resultado .= "<h2>" . $cliente["cpf"] . " " . $cliente["nome"] . "</h2>";
            $resultado .= "<p>Data: " . $cliente["dtnasc"] . "</p>";
            $resultado .= "<p>Email: " . $cliente["email"] . "</p>";
        }
        return $resultado;
    }

    /**
     * Insere um novo cliente no banco de dados.
     *
     * @param string $cpf CPF do cliente.
     * @param string $nome Nome do cliente.
     * @param string $dtnasc Data de nascimento do cliente.
     * @param string $email Email do cliente.
     * @param string $senha Senha do cliente.
     *
     * @return void
     */
    public function inserirCliente($cpf, $nome, $dtnasc, $email, $senha){
        $this->bancoDeDados->inserirCliente($cpf, $nome, $dtnasc, $email, $senha);
    }
}
?>
