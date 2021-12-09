<?php
/**
 * @author Matheus
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Pessoa.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/PessoaMapper.php";

//padrao de projetos strategy   
class Animais implements IRouter {

    public function get() {
     
       $Arrayresposta = array();
       $pessoa = array();
       $pessoa["nome"] = "Matheus";
       $pessoa["cpf"] = "12345678910";
       $pessoa["dataNascimento"] = "11/02/2000";
       $pessoa["endereco"] = "rua y , bairro z, cidade x";
       $pessoa["email"] = "matheusyzx@gmail.com";
       $pessoa["telefone"] = "027890993231";
       
       
       
       array_push($ArrayResposta ,$pessoa);
       echo json_encode($ArrayResposta);

    }

    public function post() {
        $humano = new Pessoa();
        $humano->set_nome($_POST['nome']);
        $humano->set_dataNascimento($_POST['dataNascimento']);
        $humano->set_endereco($_POST['endereco']);
        $humano->set_email($_POST['email']);
        $humano->set_telefone($_POST['telefone']);
        $humano->set_cpf($_POST['cpf']);

        /*
         * Salvar no banco de dados
         */
        
        $PessoaMapper = new PessoaMapper();

        $PessoaMapper->salvar($humano);

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
$router = new Router(new Pessoa());
$router->run();
