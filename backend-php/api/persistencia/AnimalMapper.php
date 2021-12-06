<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Animal.php";

class AnimalMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=adotepet;user=matheus;password=1234");
  }

  public function salvar($animal) {
    $sql = "INSERT INTO animais (nome, raca, dt_nascimento) VALUES (?,?,?)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute([$animal->get_nome(), $animal->get_raca(), $animal->get_dt_nascimento()]);
  }
}