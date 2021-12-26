<?php
/**
 * @author Matheus
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Login.php"; 
class LoginMapper {
  private $conexao;

  public function __construct() {
    $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=adotepet;user=matheus;password=1234");
  }

  public function validaLogin($login,$senha) {
    $sql = "SELECT count(1) FROM USUARIOS WHERE `LOGIN` = ? and SENHA=? )";
    $stmt = $this->conexao->prepare($sql, );
    $stmt->execute([$login,$senha]); 
    if ($stmt <> 1){
        throw new Exception("Usuário inválido");
        return 0;
    }
    else{
        return $stmt;
    }
    
  }
}
?>
