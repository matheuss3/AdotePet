<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Comentario.php";

class ComentarioMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=adotepet;user=thais;password=1234");
  }

  public function salvar($comentario) {
    $sql = "INSERT INTO comentarios (data, hora, descricao) VALUES (?,?,?)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute([$comentario->get_data(), $comentario->get_hora(), $comentario->get_descricao()]);
  }
}
