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

        if (isset($_POST['raca'])) {
            $animal->set_raca($_POST['raca']);
        }
        if (isset($_POST['nome'])) {
            $animal->set_nome($_POST['nome']);
        }
        if (isset($_POST['idade'])) {
            $animal->set_idade($_POST['idade']);
        }
        if (isset($_POST['especie'])) {
            $animal->set_especie($_POST['especie']);
        }
        if (isset($_POST['descricao'])) {
            $animal->set_descricao($_POST['descricao']);
        }
        /*if (isset($_POST['foto'])) {
            $animal->set_foto($_POST['foto']);
        }*/
        
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
