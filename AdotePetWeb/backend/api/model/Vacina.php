<?php

/**
 * @author Eduardo
 */
class Vacina {
   
    private $nome;

    public function get_nome() {
        return $this->nome;
    }

    public function set_nome($nome) {
        $this->nome = $nome;
        return $this;
    }

}