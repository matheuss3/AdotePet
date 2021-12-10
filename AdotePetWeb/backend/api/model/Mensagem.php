<?php

class mensagemclass {
    private $data;
    private $hora;
    private $conteudo;
    
    public function set_data($data) {
        $this->data = $data;
    }
    
    public function set_hora($hora) {
        $this->hora = $hora;
    }
 
    public function set_conteudo($conteudo) {
        $this->conteudo = $conteudo;
    }
}

