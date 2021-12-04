<?php

/**
 * Description of Adotantes
 *
 * @author Thaís
 */
//TEM QUE COLOCAR QUE EXTENDS PESSOA AQUI????????????????????????????????

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Adotante.php";
//require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/AdotanteMapper.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";

//padrao de projetos strategy   
class Adotantes implements IRouter {

    public function get() {
       // $adotanteMapper = new AdotanteMapper();
       // $ArrayResposta = $adotanteMapper->buscar();

       //mock para teste o desenvolvimento
       $Arrayresposta = array();
       $adotante1 = array();
       $adotante1["nome"] = "Fernanda";
       $adotante1["cpf"] = "123.345.567-99";
       $adotante1["dataNascimento"] = 22/01/1999;
       $adotante1["endereco"] = "Rua: Arlindo Nogueira Cidade: Teresina Estado:PI";
       $adotante1["email"] = "fefe121@gmail.com";
       $adotante1["telefone"] = "(86)999981234";
       $adotante1["comprovanteResidencia"] = "imagem comprovante residencia";
       
       $adotante2 = array();
       $adotante2["nome"] = "Pedro";
       $adotante2["cpf"] = "111.222.333-99";
       $adotante2["dataNascimento"] = 04/01/2000;
       $adotante2["endereco"] = "Rua: Maria Luísa do Val Penteado Cidade: São Mateus Estado:São Paulo";
       $adotante2["email"] = "pedrinho123@gmail.com";
       $adotante2["telefone"] = "(11)999884321";
       $adotante2["comprovanteResidencia"] = "imagem comprovante residencia";
       
       array_push($ArrayResposta ,$adotante1 , $adotante2);
       echo json_encode($ArrayResposta);
    }

    public function post() {
        $adotante = new Adotante();
        //$adotante->set_nome($_POST['nome']);
        //$adotante->set_cpf($_POST['cpf']);
        //$adotante->set_dataNascimento($_POST['dataNascimento']);
        //$adotante->set_endereco($_POST['endereco']);
        //$adotante->set_email($_POST['email']);
        //$adotante->set_telefone($_POST['telefone']);
        //$adotante->set_comprovanteResidencia($_POST['comprovanteResidencia']);
        
        $adotante->set_nome("Pedro");
        $adotante->set_cpf("111.222.333-99");
        $adotante->set_dataNascimento(04/01/2000);
        $adotante->set_endereco("Rua: Maria Luísa do Val Penteado Cidade: São Mateus Estado:São Paulo");
        $adotante->set_email("pedrinho123@gmail.com");
        $adotante->set_telefone("(11)999884321");
        $adotante->set_comprovanteResidencia("imagem comprovante residencia");

        //$adotanteMapper = new AdotanteMapper();

        $adotanteMapper->salvar($adotante);

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
$router = new Router(new Adotante());
$router->run();
