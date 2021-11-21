<?php

/**
 * @author Eduardo
 */
class Animal {
   
    private $raca;
    private $nome;
    private $idade;
   
    public function get_raca() {
        return $this->raca;
    }

    public function get_nome() {
        return $this->nome;
    }

    public function get_idade() {
        return $this->idade;
    }

    public function set_raca($raca) {
        $this->raca = $raca;
        return $this;
    }

    public function set_nome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function set_idade($idade) {
        $this->idade = $idade;
        return $this;
    }

}