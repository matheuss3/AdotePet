<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/model/mensagem.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/rotas/Router.php";


class mensagems implements IRouter{
    
    
    public function post() {
        $msg = new mensagem(); 
        $msg->setData($_POST['data']);
        $msg->setHora($_POST['hora']);
        $msg->setConteudo($_POST['conteudo']);
     
    }
    
    public function get() {
        $arrResponse = array();
        
        $msg1 = array();
        $msg1["data"] = '15/08/2020';
        $msg1["hora"] = '20:10';
        $msg1["conteudo"] = 'Ola, bom dia, tenho interesse na cachorrinha lily';
        
        $msg2 = array();
        $msg2["data"] = '12/06/2020';
        $msg2["hora"] = '15:10';
        $msg2["conteudo"] = 'Opa amigo, o gatinha ainda esta para adoção?';
        
        array_push($arrResponse, $msg1, $msg2);
        
        echo json_encode($arrResponse);
        
    }
    
    public function put() {
        
    }
    
    public function delete() {
        
    }
}

$msgs = new mensagems();
$router = new Router($msgs);
$router->run();
