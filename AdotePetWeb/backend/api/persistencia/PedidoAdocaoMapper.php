<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/PedidoAdocao.php";

class PedidoAdocaoMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=adotepet;user=thais;password=1234");
  }

  public function salvar($pedidoAdocao) {
    $sql = "INSERT INTO pedidosAdocao (dataHora, descricao, situacao, dataAlteracaoSituacao) VALUES (?,?,?,?)";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute([$pedidoAdocao->get_dataHora(), $pedidoAdocao->get_descricao(), $pedidoAdocao->get_situacao(), $pedidoAdocao->get_dataAlteracaoSituacao()]);
  }
}
