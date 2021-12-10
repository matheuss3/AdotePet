<?php
/**
 * @author Matheus
 */
require_once __DIR__ . '/model/Pessoa.php';
require_once __DIR__ . '/persistencia/PessoaMapper.php';

# Router
require_once './rotas/IRouter.php';
require_once './rotas/Router.php';

//padrao de projetos strategy   
class Pessoas implements IRouter {

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
        $humano->set_cpf($_POST['cpf']);
        $humano->set_dataNascimento($_POST['dataNascimento']);
        $humano->set_rua($_POST['rua']);
        $humano->set_bairro($_POST['bairro']);
        $humano->set_cidade($_POST['cidade']);
        $humano->set_estado($_POST['estado']);
        $humano->set_email($_POST['email']);
        $humano->set_telefone($_POST['telefone']);
        $humano->set_tipoPessoa($_POST['tipoPessoa']);
        $humano->set_login($_POST['login']);
        $humano->set_senha($_POST['senha']);
        
        echo var_dump($humano);

        $PessoaMapper = new PessoaMapper();

        $PessoaMapper->salvar($humano);

        http_response_code(201);

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
$router = new Router(new Pessoas());
$router->run();