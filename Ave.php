<?php
require_once 'Animal.php';
class Ave extends Animal {
    //Atributos
    private $corPena;
    
    //Métodos Especiais
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena){
        $this->corPena = $corPena;
    }
    //Métodos
    
    public function fazerNinho() {
        echo'<p>Construiu um ninho</p>';
    }

    public function alimentar() {
        echo'<p>Comendo frutas</p>';
    }

    public function emitirSom() {
        echo'<p>Som de ave</p>';
    }

    public function locomover() {
        echo'<p>Voando</p>';
    }

}
