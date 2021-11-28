<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Vacina.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/VacinaMapper.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";

//padrao de projetos strategy   
class Vacinas implements IRouter {

    public function get() {
       // $vacinaMapper = new VacinaMapper();
       // $ArrayResposta = $vacinaMapper->buscar();

       //mock para teste o desenvolvimento
       $Arrayresposta = array();
       $vacina1 = array();
       $vacina1["id"] = 1;
       $vacina1["nome"] = "antirrábica";
       
       $vacina2 = array();
       $vacina2["id"] = 2;
       $vacina2["nome"] = "V4";
       
       array_push($ArrayResposta ,$vacina1 , $vacina2);
       echo json_encode($ArrayResposta);

    }

    public function post() {
        $vacina = new Vacina();
        //$vacina->set_nome($_POST['nome']);
        
        $vacina->set_nome("antirrábica");

        $vacinaMapper = new VacinaMapper();

        $vacinaMapper->salvar($vacina);

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
$router = new Router(new Vacinas());
$router->run();
