<?php

require_once __DIR__ . '/../model/Pessoa.php';

class PessoaMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=adotepet;user=matheus;password=1234");
  }

  public function salvar($pessoa) {
    $sql = "INSERT INTO pessoa (`login`, senha, cpf, nome, dataNascimento, rua, bairro, cidade, estado, email, telefone, tipoPessoa) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $this->conexao->prepare($sql, );
    echo '<br><br>usuario<br><br>' . $pessoa->get_cpf();
    $stmt->execute([$pessoa->get_login(),  $pessoa->get_senha(), $pessoa->get_cpf(), $pessoa->get_nome(),
    $pessoa->get_dataNascimento(), $pessoa->get_rua(), $pessoa->get_bairro(), $pessoa->get_cidade(), 
    $pessoa->get_estado(),$pessoa->get_email(),$pessoa->get_telefone(),$pessoa->get_tipoPessoa()]); 
    
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