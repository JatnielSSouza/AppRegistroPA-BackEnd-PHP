<?php 
class Registro {
    private $id;
    private $sistole;
    private $diastole;
    private $responsavel;
    private $data_cadastro;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}