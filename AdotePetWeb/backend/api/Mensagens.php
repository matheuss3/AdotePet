<?php

/**
 * Description of Mensagens
 *
 * @author Thaís
 */
 
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Mensagem.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/MensagemMapper.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";


class Mensagens implements IRouter{

    public function get() {
    
        // $mensagemMapper = new MensagemMapper();
        // $ArrayResposta = $mensagemMapper->buscar();
        
        $Arrayresposta = array();
        
        $msg1 = array();
        $msg1["data"] = '15/08/2020';
        $msg1["hora"] = '20:10';
        $msg1["conteudo"] = 'Ola, bom dia, tenho interesse na cachorrinha lily';
        
        $msg2 = array();
        $msg2["data"] = '12/06/2020';
        $msg2["hora"] = '15:10';
        $msg2["conteudo"] = 'Opa amigo, o gatinha ainda esta para adoção?';
        
        array_push($Arrayresposta, $msg1, $msg2);
        
        echo json_encode($Arrayresposta);
    }
    
    public function post() {
    
        $msg = new mensagem(); 
        
        if (isset($_POST['data'])) {
            $msg->set_data($_POST['data']);
        }
        if (isset($_POST['hora'])) {
            $msg->set_hora($_POST['hora']);
        }
        if (isset($_POST['conteudo'])) {
            $msg->set_conteudo($_POST['conteudo']);
        }
        
        $msgMapper = new MensagemMapper();
        $msgMapper->salvar($msg);
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
$rotaMensagens = new Mensagens();
$router = new Router($rotaMensagens);
$router->run();
