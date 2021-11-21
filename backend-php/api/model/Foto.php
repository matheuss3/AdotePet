<?php

/**
 * @author Matheus
 */
class Foto {
   
    private $descricao; 


    public function get_descricao() {
        return $this->descricao;
    }
    
    public function set_descricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }
 
}
