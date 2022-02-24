<?php

abstract class Animal {
    //Atributos
    protected $peso;
    protected $age;
    protected $membros;
    //Métodos
    abstract function locomover();

    abstract function alimentar();

    abstract function emitirSom();

    //Métodos Especiais
    function getPeso() {
        return $this->peso;
    }

    function getAge() {
        return $this->age;
    }

    function getMembros() {
        return $this->membros;
    }

    function setPeso($peso){
        $this->peso = $peso;
    }

    function setAge($age){
        $this->age = $age;
    }

    function setMembros($membros){
        $this->membros = $membros;
    }


}
