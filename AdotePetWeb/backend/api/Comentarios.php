<?php

/**
 * Description of Comentarios
 *
 * @author Thaís
 */
 
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Comentario.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/ComentarioMapper.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";

class Comentarios implements IRouter{
    
    public function get() {
   
    	// $comentarioMapper = new ComentarioMapper();
        // $ArrayResposta = $comentarioMapper->buscar();
        
        $Arrayresposta = array();
        $coment1 = array();
        $coment1["data"] = '20/08/2020';
        $coment1["hora"] = '20:10';
        $coment1["descricao"] = 'Quero muito ser a dona desse gato';
        
        $coment2 = array();
        $coment2["data"] = '14/06/2020';
        $coment2["hora"] = '15:10';
        $coment2["descricao"] = 'Que lindo esse cachorro';
        
        array_push($Arrayresposta, $coment1, $coment2);
        
        echo json_encode($Arrayresposta);
        
    }
    
    public function post() {
    
        $coment = new Comentario();
        
        if (isset($_POST['data'])) {
            $coment->set_data($_POST['data']);
        }
        if (isset($_POST['hora'])) {
            $coment->set_hora($_POST['hora']);
        }
        if (isset($_POST['descricao'])) {
            $coment->set_descricao($_POST['descricao']);
        }
        
        $comentMapper = new ComentarioMapper();
        $comentMapper->salvar($coment);
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
$rotaComentarios = new Comentarios();
$router = new Router($rotaComentarios);
$router->run();
