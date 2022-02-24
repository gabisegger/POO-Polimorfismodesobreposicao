<?php
require_once 'Animal.php';
class Peixe extends Animal{
    //Atributos
    private $corEscama;
    //Métodos Especiais
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
    //Métodos
    public function soltarBolha() {
        echo '<p>Soltou uma bolha</p>';
    }

    public function alimentar() {
        echo '<p>Comendo Substâncias</p>';
    }

    public function emitirSom() {
        echo '<p>Peixe não faz som</p>';
    }

    public function locomover() {
        echo '<p>Nadando</p>';
    }

}
