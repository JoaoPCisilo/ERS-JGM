<?php

/**
 * Classe BancoDeDados responsável por gerenciar as operações com o banco de dados.
 */
class BancoDeDados {
    /**
     * @param string $host Endereço do servidor de banco de dados.
     * @param string $login Nome de usuário para conexão com o banco de dados.
     * @param string $senha Senha para conexão com o banco de dados.
     * @param string $dataBase Nome do banco de dados.
     */
    private $host;
    private $login;
    private $senha;
    private $dataBase;

    /**
     * Construtor da classe BancoDeDados.
     *
     * @param string $host Endereço do servidor.
     * @param string $login Nome de usuário.
     * @param string $senha Senha de acesso.
     * @param string $dataBase Nome do banco de dados.
     */
    public function __construct($host, $login, $senha, $dataBase) {
        $this->host = $host;
        $this->login = $login;
        $this->senha = $senha;
        $this->dataBase = $dataBase;
    }

    /**
     * Conecta ao banco de dados.
     *
     * @return mysqli|false Retorna a conexão com o banco de dados ou false em caso de erro.
     */
    public function conectarBD() {
        $conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->dataBase);
        if (!$conexao) {
            die("Falha na conexão: " . mysqli_connect_error());
        }
        return $conexao;
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
    public function inserirCliente($cpf, $nome, $dtnasc, $email, $senha) {
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO cliente (cpf, nome, dtnasc, email, senha) 
                     VALUES ('$cpf','$nome','$dtnasc','$email','$senha')";
        mysqli_query($conexao, $consulta);
    }

    /**
     * Retorna a lista de clientes cadastrados.
     *
     * @return mysqli_result|false Lista de clientes ou false em caso de falha na consulta.
     */
    public function retornarClientes() {
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao, $consulta);
        return $listaClientes;
    }

    /**
     * Exclui um cliente do banco de dados.
     *
     * @param string $nome Nome do cliente a ser excluído.
     *
     * @return bool Retorna true se a exclusão for bem-sucedida ou false em caso de falha.
     */
    public function excluirClientes($nome) {
        $conexao = $this->conectarBD();
        $consulta = "DELETE FROM cliente WHERE nome = '$nome'";
        $resultado = mysqli_query($conexao, $consulta);
        return $resultado;
    }
    
    // Função para alterar um cliente
    public function alterarCliente($cpf, $nome, $dtnasc, $email) {
        $conexao = $this->conectarBD();
        $query = "UPDATE cliente SET nome = '$nome', dtnasc = '$dtnasc', email = '$email' WHERE cpf = '$cpf'";
        return mysqli_query($conexao, $query);
    }

    // Função para excluir um cliente
    public function excluirCliente($cpf) {
        $conexao = $this->conectarBD();
        $query = "DELETE FROM cliente WHERE cpf = '$cpf'";
        return mysqli_query($conexao, $query);
    }
    
}


?>

    

