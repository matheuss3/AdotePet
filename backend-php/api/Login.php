<?php
/**
 * @author Matheus
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Login.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/LoginMapper.php";

//padrao de projetos strategy   
/**
 * @author Matheus
 */
class Login implements IRouter {    

    public function get() {
        $humano = new Login();
        $humano->get_login($_GET['Matheus']); /* Pegar o login da tela*/
        $humano->get_senha($_GET['123']);/* Pegar a senha da tela*/
       
        $LoginMapper = new LoginMapper();
        $LoginMapper->validaLogin($humano); /* Jogar pro validaLogin no Mapper*/

        if ($LoginMapper == 0){ /* Validar o retorno (no Mapper já gera o throw se não der certo)*/
            throw new Exception("Não implementado ainda");
        }
        else{
            print("Logou com sucesso");
        }
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
$router = new Router(new Login());
$router->run();
?>
