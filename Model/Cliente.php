<?php

/**
 * Classe Cliente responsável por representar um cliente.
 */
class Cliente {
    /**
     * @param string $cpf CPF do cliente.
     * @param string $nome Nome do cliente.
     * @param string $dtnasc Data de nascimento do cliente.
     * @param string $email Email do cliente.
     * @param string $senha Senha do cliente.
     */
    private $cpf;
    private $nome;
    private $dtnasc;
    private $email;
    private $senha;

    /**
     * Construtor da classe Cliente.
     *
     * @param string $cpf CPF do cliente.
     * @param string $nome Nome do cliente.
     * @param string $dtnasc Data de nascimento do cliente.
     * @param string $email Email do cliente.
     * @param string $senha Senha do cliente.
     */
    public function __construct($cpf, $nome, $dtnasc, $email, $senha) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->dtnasc = $dtnasc;
        $this->email = $email;
        $this->senha = $senha;
    }

    /**
     * Retorna o CPF do cliente.
     *
     * @return string CPF do cliente.
     */
    public function getCpf() {
        return $this->cpf;
    }

    /**
     * Retorna o nome do cliente.
     *
     * @return string Nome do cliente.
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Retorna a data de nascimento do cliente.
     *
     * @return string Data de nascimento do cliente.
     */
    public function getDnasc() {
        return $this->dtnasc;
    }

    /**
     * Retorna o email do cliente.
     *
     * @return string Email do cliente.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Retorna a senha do cliente.
     *
     * @return string Senha do cliente.
     */
    public function getSenha() {
        return $this->senha;
    }

    /**
     * Define o CPF do cliente.
     *
     * @param string $cpf CPF do cliente.
     *
     * @return void
     */
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    /**
     * Define o nome do cliente.
     *
     * @param string $nome Nome do cliente.
     *
     * @return void
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * Define a data de nascimento do cliente.
     *
     * @param string $dtnasc Data de nascimento do cliente.
     *
     * @return void
     */
    public function setDnasc($dtnasc) {
        $this->dtnasc = $dtnasc;
    }

    /**
     * Define o email do cliente.
     *
     * @param string $email Email do cliente.
     *
     * @return void
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Define a senha do cliente.
     *
     * @param string $senha Senha do cliente.
     *
     * @return void
     */
    public function setSenha($senha) {
        $this->senha = $senha;
    }
}
?>
