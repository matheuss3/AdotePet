<?php

require_once __DIR__ . '/../model/Animal.php';

class AnimalMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=adotepet;user=matheus;password=1234");
  }

  public function salvar($animal) {
    $sql = "INSERT INTO animais (nome, raca, dt_nascimento, especie, descricao) VALUES (?,?,?,?,?)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute([$animal->get_nome(), $animal->get_raca(), 
      $animal->get_dt_nascimento(), $animal->get_especie(), $animal->get_descricao()]);
  }

  public function buscar() {
    $sql = "select * from animais";
    $statement = $this->conexao->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    return  $json;
  }
}