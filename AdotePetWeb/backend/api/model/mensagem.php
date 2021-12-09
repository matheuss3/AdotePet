<?php

class mensagemclass {
    private $data;
    private $hora;
    private $conteudo;
    
    public function setData($data) {
        $this->data = $data;
    }
    
    public function setHora($hora) {
        $this->hora = $hora;
    }
 
    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }
}

