<?php

/**
 * @author Matheus
 */
class Pessoa {
   
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $endereco;
    private $email;
    private $telefone;
   
    public function get_cpf() {
        return $this->cpf;
    }

    public function get_nome() {
        return $this->nome;
    }

    public function get_dataNascimento() {
        return $this->dataNascimento;
    }
    public function get_endereco() {
        return $this->endereco;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_telefone() {
        return $this->telefone;
    }
    
    public function set_nome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function set_cpf($cpf) {
        $this->nome = $cpf;
        return $this;
    }

    public function set_dataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }

    public function set_endereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    public function set_email($email) {
        $this->email=$email;
        return $this;
    }

    public function set_telefone($telefone) {
        $this->telefone=$telefone;
        return $this;
    }
}
