<?php

/**
 * @author Eduardo
 */
class Animal {
  
    private $raca;
    private $nome;
    private $idade;
    private $especie;
    private $descricao;
    private $foto;
   
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
    }

    public function set_nome($nome) {
        $this->nome = $nome;
    }

    public function set_idade($idade) {
        $this->idade = $idade;
    }

    public function get_especie() {
        return $this->especie;
    }

    public function set_especie($especie) {
        $this->especie = $especie;
    }

    public function get_descricao() {
        return $this->descricao;
    }

    public function set_descricao($descricao) {
        $this->descricao = $descricao;
    }

    public function get_foto() {
        return $this->foto;
    }

    public function set_foto($foto) {
        $this->foto = $foto;
    }

}
