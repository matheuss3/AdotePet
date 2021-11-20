<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnuncioAdocao
 *
 * @author Matheus
 */
class AnuncioAdocao {
    private $dataHora;
    private $estado;
    private $cidade;
    private $bairro;
    private $descricao;
    
    public function AnuncioAdocao() {
        $this->dataHora = date('d-M-y');
    }
    
    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}
