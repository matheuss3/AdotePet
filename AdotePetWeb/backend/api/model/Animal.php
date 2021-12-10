<?php

/**
 * @author Eduardo
 */
class Animal {
    private $raca;
    private $nome;
    private $especie;
    private $dt_nascimento;
    private $descricao;

    public function get_especie() {
        return $this->especie;
    }

    public function set_especie($especie) {
        $this->especie = $especie;
        return $this;
    }

    public function get_descricao() {
        return $this->descricao;
    }

    public function set_descricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }
   
    public function get_raca() {
        return $this->raca;
    }

    public function get_nome() {
        return $this->nome;
    }

    public function get_dt_nascimento() {
        return $this->dt_nascimento;
    }

    public function set_raca($raca) {
        $this->raca = $raca;
        return $this;
    }

    public function set_nome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function set_dt_nascimento($dt_nascimento) {
        $this->dt_nascimento = $dt_nascimento;
        return $this;
    }

}