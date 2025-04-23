<?php

class Cliente{
   
    private$nome;
    private  $cpf;
    private$endereco;
    private $conexao;

    public function __construct($nome, $cpf, $endereco, $conexao){

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco= $endereco;
        $this->conexao = $conexao;
    }
    public function insereCliente(){
        $sql = "INSERT INTO tb_cliente(nome, cpf, endereco) VALUES (?,?,?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('sss', $this->nome, $this->cpf, $this->endereco);
        if($stmt->execute()){
            echo "cliente inserido";


        }else{

            echo "erro ao inserir". $stmt->error;

        }

    $stmt->close();
    }
}





?>