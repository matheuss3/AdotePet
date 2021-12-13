<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/devweb/backend/api/model/Animal.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/devweb/backend/api/persistencia/AnimalMapper.php';

# Router
require_once $_SERVER['DOCUMENT_ROOT'] . "/devweb/backend/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/devweb/backend/api/rotas/Router.php";

//padrao de projetos strategy   
class Animais implements IRouter {

    // chamada do metodo buscar retornando animais Cachorros como exemplo - futuramente, direcionar para cada buscar especifico de acordo com a varivel recebida
    public function get() {
       $animalMapper = new AnimalMapper();

       $animais = $animalMapper->buscar();

       echo $animais;
    }

    public function post() {
        $animal = new Animal();
        var_dump($animal);
        if (isset($_POST['raca'])) {
            $animal->set_raca($_POST['raca']);
        }
        if (isset($_POST['especie'])) {
            $animal->set_especie($_POST['especie']);
        }
        if (isset($_POST['nome'])) {
            $animal->set_nome($_POST['nome']);
        }
        if (isset($_POST['dt_nascimento'])) {
            $animal->set_dt_nascimento($_POST['dt_nascimento']);
        }
        if (isset($_POST['descricao'])) {
            $animal->set_descricao($_POST['descricao']);
        }
        
        $animalMapper = new AnimalMapper();

        $animalMapper->salvar($animal);

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
$rotaAnimais = new Animais();
$router = new Router($rotaAnimais);
$router->run();
