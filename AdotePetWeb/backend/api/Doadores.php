<?php

/**
 * Description of Doadores
 *
 * @author Thaís
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Doador.php";
//require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/DoadorMapper.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";

//padrao de projetos strategy   
class Doadores extends Pessoa implements IRouter {
String nome, String cpf, Date dataNascimento, String endereco, String email, String telefone
    public function get() {
       // $doadorMapper = new DoadorMapper();
       // $ArrayResposta = $doadorMapper->buscar();

       //mock para teste o desenvolvimento
       $Arrayresposta = array();
       $doador1 = array();
       $doador1["nome"] = "Jessica";
       $doador1["cpf"] = "678.987.566-15";
       $doador1["dataNascimento"] = 17/11/1995;
       $doador1["endereco"] = "Rua: Afonso Claudio Cidade: Vila Velha Estado:ES";
       $doador1["email"] = "jessica456@gmail.com";
       $doador1["telefone"] = "(27)999989876";
       
       $doador2 = array();
       $doador2["nome"] = "Gustavo";
       $doador2["cpf"] = "777.654.123-87";
       $doador2["dataNascimento"] = 05/05/2001;
       $doador2["endereco"] = "Rua: Barão de Vitória Cidade: Diadema Estado:São Paulo";
       $doador2["email"] = "gugis444@gmail.com";
       $doador2["telefone"] = "(11)999881236";
       
       array_push($ArrayResposta ,$doador1 , $doador2);
       echo json_encode($ArrayResposta);
    }

    public function post() {
        $doador = new Doador();
        
        if (isset($_POST['nome'])) {
            $adotante->set_nome($_POST['nome']);
        }
        if (isset($_POST['cpf'])) {
            $adotante->set_cpf($_POST['cpf']);
        }
        if (isset($_POST['dataNascimento'])) {
            $adotante->set_dataNascimento($_POST['dataNascimento']);
        }
        if (isset($_POST['endereco'])) {
            $adotante->set_endereco($_POST['endereco']);
        }
        if (isset($_POST['email'])) {
            $adotante->set_email($_POST['email']);
        }
        if (isset($_POST['telefone'])) {
            $adotante->set_telefone($_POST['telefone']);

        $doadorMapper = new DoadorMapper();

        $doadorMapper->salvar($doador);

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
$rotaDoadores = new Doadores();
$router = new Router($rotaAdotantes);
$router->run();
