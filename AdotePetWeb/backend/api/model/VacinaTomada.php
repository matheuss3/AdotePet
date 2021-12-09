<?php

/**
 * @author Eduardo
 */
class VacinaTomada {
   
    private $dataVacinacao;

    public function get_dataVacinacao() {
        return $this->dataVacinacao;
    }

    public function set_dataVacinacao($dataVacinacao) {
        $this->dataVacinacao = $dataVacinacao;
        return $this;
    }

}