<?php

/**
 * @author Matheus
 */
class Login {
   
    private $login; 
    private $senha; 


    public function get_senha() {
        return $this->senha;
    }
    
    public function set_senha($senha) {
        $this->senha = $senha;
        return $this;
    }

    public function get_login() {
        return $this->login;
    }
    
    public function set_login($login) {
        $this->login = $login;
        return $this;
    }
 
}
?>
