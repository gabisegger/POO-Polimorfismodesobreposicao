<?php
require_once 'Animal.php';
class Reptil extends Animal{
    //Atributos
    private $corEscama;
    //Métodos Especiais
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function alimentar() {
        echo '<p>COmendo Vegetais</p>';
    }

    public function emitirSom() {
        echo '<p>Som de Reptil</p>';
    }

    public function locomover() {
        echo '<p>Rastejando</p>';
    }

}
