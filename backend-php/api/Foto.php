<?php
/**
 * @author Matheus
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/foto.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/FotoMapper.php";
//padrao de projetos strategy   
class Animais implements IRouter {

    public function get() {
     
       $Arrayresposta = array();
       $foto = array();
       $foto["descricao"] = "Foto do animal";     
       
       
       array_push($ArrayResposta ,$foto);
       echo json_encode($ArrayResposta);

    }

    public function post() {
        $foto = new Foto();
        $foto->set_descricao($_POST['descricao']);
        /*
         * Salvar no banco de dados
         */
        $FotoMapper = new FotoMapper();

        $FotoMapper->salvar($humano);

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
$router = new Router(new foto());
$router->run();
