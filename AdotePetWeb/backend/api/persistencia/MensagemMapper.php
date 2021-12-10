<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Mensagem.php";

class MensagemMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=adotepet;user=thais;password=1234");
  }

  public function salvar($mensagem) {
    $sql = "INSERT INTO mensagens (data, hora, conteudo) VALUES (?,?,?)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute([$mensagem->get_data(), $mensagem->get_hora(), $mensagem->get_conteudo()]);
  }
}
