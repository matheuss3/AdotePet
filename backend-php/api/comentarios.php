<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/model/comentario.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/rotas/Router.php";

class comentario implements IRouter{
    
    
    public function post() {
        $coment = new comentario();
        $coment->setData($_POST['data']);
        $coment->setHora($_POST['hora']);
        $coment->setDescricao($_POST['descricao']);
        
    }
    
    public function get() {
        $arrResponse = array();
        
        $coment1 = array();
        $coment1["data"] = '20/08/2020');
        $coment1["hora"] = '20:10';
        $coment1["descricao"] = 'Quero muito ser a dona desse gato';
        
        $coment2 = array();
        $coment2["data"] = '14/06/2020');
        $coment2["hora"] = '15:10';
        $coment2["descricao"] = 'Que lindo esse cachorro';
        
        array_push($arrResponse, $coment1, $coment2);
        
        echo json_encode($arrResponse);
        
    }
    
    public function put() {
        
    }
    
    public function delete() {
        
    }
}

$coments = new comentario();
$router = new Router($coments);
$router->run();