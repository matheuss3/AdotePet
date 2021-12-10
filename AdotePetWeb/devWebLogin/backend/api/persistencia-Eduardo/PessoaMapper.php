<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/devWebLogin/backend/api/model-Eduardo/Pessoa.php';

class PessoaMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=teste;user=root;password=root");
  }

  public function salvar($pessoa) {
    $sql = "INSERT INTO pessoa ( nome,cpf,dataNascimento,rua,bairro,cidade,estado,email,telefone,tipoPessoa) VALUES (?,?,?,?,?)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute([ $pessoa->get_nome(), $pessoa->get_cpf(), 
      $pessoa->get_dataNascimento(), $pessoa->get_rua(), $pessoa->get_bairro(), $pessoa->get_cidade(), $pessoa->get_estado(),$pessoa->get_email(),$pessoa->get_telefone(),$pessoa->get_tipoPessoa()]);
    echo("cheguei");
  }

  public function buscar() {
    $sql = "select * from pessoa";
    $statement = $this->conexao->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    return  $json;
  }
}