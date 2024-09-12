<?php

class Cliente{
    private $cpf;

    private $nome;
    private $dtnasc;
    private $email;
    private $senha;

    public function __construct($cpf, $nome, $dtnasc, $email, $senha){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->dtnasc = $dtnasc;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDnasc(){
        return $this->dtnasc;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setDnasc($dtnasc){
        $this->dtnasc = $dtnasc;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
}