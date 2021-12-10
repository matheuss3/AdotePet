<?php

/**
 * @author Matheus
 */
class Pessoa {
   
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;
    private $email;
    private $telefone;
    private $tipoPessoa;
    
    public function get_rua() {
        return $this->rua;
    }

    public function get_bairro() {
        return $this->bairro;
    }

    public function get_cidade() {
        return $this->cidade;
    }

    public function get_estado() {
        return $this->estado;
    }

    public function get_tipoPessoa() {
        return $this->tipoPessoa;
    }

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

    public function set_rua($rua) {
        $this->rua=$rua;
        return $this;
    }

    public function set_bairro($bairro) {
        $this->bairro=$bairro;
        return $this;
    }

    public function set_cidade($cidade) {
        $this->cidade=$cidade;
        return $this;
    }

    public function set_estado($estado) {
        $this->estado=$estado;
        return $this;
    }

    public function set_tipoPessoa($tipoPessoa) {
        $this->tipoPessoa=$tipoPessoa;
        return $this;
    }
}