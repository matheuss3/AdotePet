<?php

/**
 * Description of AnuncioAdocao
 *
 * @author Matheus
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/rotas/IRouter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/model/AnuncioAdocao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/persistencia/AnuncioAdocaoMapper.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/rotas/Router.php";

class AnunciosAdocao implements IRouter{
    
    
    public function post() {
        $anuncio = new AnuncioAdocao();
//        $anuncio->setEstado($_POST['estado']);
//        $anuncio->setCidade($_POST['cidade']);
//        $anuncio->setBairro($_POST['bairro']);
//        $anuncio->setDescricao($_POST['descricao']);
        
        $anuncio->setEstado('ES');
        $anuncio->setCidade('Serra');
        $anuncio->setBairro('Muribeca');
        $anuncio->setDescricao('Cachorrinho abandonado recuperado das ruas, está '
                . 'precisando de bons donos');
        
        
        $anuncioMapper = new AnuncioAdocaoMapper();
        
        $anuncioMapper->salvar($anuncio);
    }
    
    public function get() {
        $arrResponse = array();
        
        // Moks para testes
        $anuncio1 = array();
        $anuncio1["dataHoraCriacao"] = new DateTime();
        $anuncio1["estado"] = 'ES';
        $anuncio1["cidade"] = 'Serra';
        $anuncio1["bairro"] = 'Muribeca';
        $anuncio1["descricao"] = 'Cachorrinho abandonado recuperado das ruas, está '
                . 'precisando de bons donos';
        
        $anuncio2 = array();
        $anuncio2["dataHoraCriacao"] = new DateTime();
        $anuncio2["estado"] = 'ES';
        $anuncio2["cidade"] = 'Vitória';
        $anuncio2["bairro"] = 'Jardim da Penha';
        $anuncio2["descricao"] = 'Estou sem condições de cuidar desta calopsita '
                . 'ela se chama Sakura, estou procurando alguem para dar melhores'
                . 'condições para ela';
        
        array_push($arrResponse, $anuncio1, $anuncio2);
        
        echo json_encode($arrResponse);
        
    }
    
    public function put() {
        
    }
    
    public function delete() {
        
    }
}

$anunciosAdocao = new AnunciosAdocao();
$router = new Router($anunciosAdocao);
$router->run();
