<?php

class comentario{
    private $data;
    private $hora;
    private $descricao;
    
    public function setData($data) {
        $this->data = $data;
    }
    
    public function setHora($hora) {
        $this->hora = $hora;
    }
 
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}
