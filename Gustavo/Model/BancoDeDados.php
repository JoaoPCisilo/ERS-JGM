<?php

class BancoDeDados{
    private $host;
    private $login;
    private $senha;
    private $dataBase;


    public function __construct($host, $login, $senha, $dataBase){
        $this->host = $host; //Exemplo: 127.0.0.1
    
        $this->login = $login;
    
        $this->senha = $senha;
        
        $this->dataBase = $dataBase;
    }

public function conectarBD(){
    $conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->dataBase);
    if(!$conexao){
        die("falha na conexão: " . mysqli_connect_error());
    }
    return $conexao;
}

public function inserirCliente($cpf, $nome, $dtnasc, $email, $senha){
    
    $conexao = $this->conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, dtnasc, email, senha) 
                 VALUES ('$cpf','$nome','$dtnasc','$email','$senha')";
    mysqli_query($conexao,$consulta);
}


public function retornarClientes(){
    
    $conexao = $this->conectarBD(); 
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao, $consulta);
    return $listaClientes;
}

public function excluirClientes($nome){
    
    $conexao = $this->conectarBD();
    $consulta = "DELETE FROM cliente WHERE nome = $nome";
    $resultado = mysqli_query($conexao, $consulta);

    return $resultado;
}

public function atualizarCliente($cpf, $nome,$dtnasc, $email, $telefone) {
    
    $conexao = $this->conectarBD();
    $consulta = "UPDATE cliente SET nome = '$nome',dtnasc = '$dtnasc', email = '$email', telefone = '$telefone' WHERE cpf = $cpf";
    $resultado = mysqli_query($conexao, $consulta);
    
    return $resultado;
}


}
?>