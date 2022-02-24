<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo</title>
    </head>
    <body>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';
            
            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a = new Ave();
            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();
            
            $m->setPeso(85.3);
            $m->setAge(2);
            $m->setMembros(4);
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            
            $p->setPeso(0.35);
            $p->setAge(1);
            $p->setMembros(0);
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();
            $p->soltarBolha();
            
            $a->setPeso(0.89);
            $a->setAge(2);
            $a->setMembros(2);
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            $a->fazerNinho();
        ?>
    </body>
</html>
