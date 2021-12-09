<?php
/**
 * Description of Adotantes
 *
 * @author Thaís
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/PedidoAdocao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/PedidoAdocaoMapper.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";
 
class PedidosAdocao implements IRouter {

    public function get() {
       // $pedidoAdocaoMapper = new PedidoAdocaoMapper();
       // $ArrayResposta = $pedidoAdocaoMapper->buscar();

       //mock para teste o desenvolvimento
       $Arrayresposta = array();
       $pedido1 = array();
       $pedido1["dataHora"] = 04/11/2021;
       $pedido1["descricao"] = "Jessica quer adotar a kika";
       $pedido1["situacao"] = "Aberto";
       $pedido1["dataAlteracaoSituacao"] = 06/11/2021;
       
       $pedido2 = array();
       $pedido2["dataHora"] = 04/11/2021;
       $pedido2["descricao"] = "Fernanda quer adotar a kika";
       $pedido2["situacao"] = "Aberto";
       $pedido2["dataAlteracaoSituacao"] = 06/11/2021;
       
       array_push($ArrayResposta ,$pedido1 , $pedido2);
       echo json_encode($ArrayResposta);

    }

    public function post() {
        $pedido = new PedidoAdocao();
        
        if (isset($_POST['dataHora'])) {
            $pedido->set_dataHora($_POST['dataHora']);
        }
        if (isset($_POST['descricao'])) {
            $pedido->set_descricao($_POST['descricao']);
        }
        if (isset($_POST['situacao'])) {
            $pedido->set_situacao($_POST['situacao']);
        }
        if (isset($_POST['dataAlteracaoSituacao'])) {
            $pedido->set_dataAlteracaoSituacao($_POST['dataAlteracaoSituacao']);
        }

        $pedidoMapper = new PedidoAdocaoMapper();

        $pedidoMapper->salvar($pedido);

    }

    public function put() {
        http_response_code(404);
        throw new Exception("Não implementado ainda");
    }

    public function delete() {
        http_response_code(404);
        throw new Exception("Não implementado ainda");
    }

}

header("Access-Control-Allow-Origin: *");
$rotaPedidosAdocao = new PedidosAdocao();
$router = new Router($rotaPedidosAdocao);
$router->run();
