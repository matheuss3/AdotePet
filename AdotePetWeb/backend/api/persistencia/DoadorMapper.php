<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Doador.php";

class DoadorMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=adotepet;user=thais;password=1234");
  }

  public function salvar($doador) {
    $sql = "INSERT INTO doadores (nome, cpf, dataNascimento, endereco, email, telefone) VALUES (?,?,?,?,?,?)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute([$adotante->get_nome(), $adotante->get_cpf(), $adotante->get_dataNascimento(), $adotante->get_endereco(), $adotante->get_email(), $adotante->get_telefone()]);
  }
}
