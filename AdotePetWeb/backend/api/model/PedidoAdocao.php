<?php

/**
 * @author Thaís
 */
class PedidoAdocao {
   
    private $dataHora;
    private $descricao;
    private $situacao;
    private $dataAlteracaoSituacao;
   
    public function get_dataHora() {
        return $this->dataHora;
    }

    public function get_descricao() {
        return $this->descricao;
    }

    public function get_situacao() {
        return $this->situacao;
    }
    
    public function get_dataAlteracaoSituacao() {
        return $this->dataAlteracaoSituacao;
    }

    public function set_dataHora($dataHora) {
        $this->dataHora = $dataHora;
        return $this;
    }
    
    public function set_descricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    public function set_situacao($situacao) {
        $this->situacao = $situacao;
        return $this;
    }
    
    public function set_dataAlteracaoSituacao($dataAlteracaoSituacao) {
        $this->dataAlteracaoSituacao = $dataAlteracaoSituacao;
        return $this;
    }

    

}
