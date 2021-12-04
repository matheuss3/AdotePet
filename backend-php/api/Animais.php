<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/api/model/Animal.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/persistencia/AnimalMapper.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/api/rotas/Router.php";

//padrao de projetos strategy   
class Animais implements IRouter {

    public function get() {
       // $animalMapper = new AnimalMapper();
       // $ArrayResposta = $animalMapper->buscar();

       //mock para teste o desenvolvimento
       $Arrayresposta = array();
       $animal1 = array();
       $animal1["id"] = 1;
       $animal1["raca"] = "Poodle";
       $animal1["nome"] = "Bilu";
       $animal1["idade"] = "2 anos e 3 meses";
       
       $animal2 = array();
       $animal2["id"] = 2;
       $animal2["raca"] = "Persa";
       $animal2["nome"] = "Léo";
       $animal2["idade"] = "1 ano e 5 meses";
       
       array_push($Arrayresposta ,$animal1 , $animal2);
       echo json_encode($Arrayresposta);
    }

    public function post() {
        $animal = new Animal();
        // //$animal->set_raca($_POST['raca']);
        // //$animal->set_nome($_POST['nome']);
        // //$animal->set_idade($_POST['idade']);
        
        $animal->set_raca("Persa");
        $animal->set_nome("Leo");
        $animal->set_dt_nascimento("2021-01-01");

        $animalMapper = new AnimalMapper();

        $animalMapper->salvar($animal);
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
