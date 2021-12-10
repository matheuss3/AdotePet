<?php

class comentario{
    private $data;
    private $hora;
    private $descricao;
    
    public function set_data($data) {
        $this->data = $data;
    }
    
    public function set_hora($hora) {
        $this->hora = $hora;
    }
 
    public function set_descricao($descricao) {
        $this->descricao = $descricao;
    }
}
