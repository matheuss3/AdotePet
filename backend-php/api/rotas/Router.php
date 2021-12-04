<?php

/**
 * Description of Router
 *
 * @author Matheus
 */
class Router {
    private $classe;
    
    public function __construct($classe) {
        $this->classe = $classe;
    }
    
    public function run() {
        try {
            if ($this->get()) {
                return;
            } else if ($this->post()) {
                return;
            } else if ($this->delete()) {
                return;
            } else if ($this->put()) {
                return;
            }
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage();
            http_response_code(400);
        } catch (Exception $e) {
            echo $e->getMessage();
            http_response_code(400);
        }
    }

    public function get() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            echo "Teste";
            echo var_dump($this->classe);
            $this->classe->get();
            return true;
        }
        return false;
    }
    
    
    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $this->classe->delete();
            return true;
        }
        return false;
    }

    public function post() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->classe->post();
            return true;
        }
        return false;
    }

    public function put() {
        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            $this->classe->put();
            return true;
        }
        return false;
    }

}

