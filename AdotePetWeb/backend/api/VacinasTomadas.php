<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/VacinaTomada.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/VacinaTomadaMapper.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";

//padrao de projetos strategy   
class VacinasTomadas implements IRouter {

    public function get() {
       // $vacinaTomadaMapper = new VacinaTomadaMapper();
       // $ArrayResposta = $vacinaTomadaMapper->buscar();

       //mock para teste o desenvolvimento
       $Arrayresposta = array();
       $vacinaTomada1 = array();
       $vacinaTomada1["id"] = 1;
       $vacinaTomada1["dataVacinacao"] = "2020/08/09";
       
       $vacinaTomada2 = array();
       $vacinaTomada2["id"] = 2;
       $vacinaTomada2["dataVacinacao"] = "2019/11/15";
       
       array_push($ArrayResposta ,$vacinaTomada1 , $vacinaTomada2);
       echo json_encode($ArrayResposta);

    }

    public function post() {
        $vacinaTomada = new VacinaTomada();
        //$vacinaTomada->set_dataVacinacao($_POST['dataVacinacao']);

        $vacinaTomada->set_dataVacinacao("2020/08/09");

        $vacinaTomadaMapper = new VacinaTomadaMapper();

        $vacinaTomadaMapper->salvar($vacinaTomada);

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
$router = new Router(new VacinasTomadas());
$router->run();
