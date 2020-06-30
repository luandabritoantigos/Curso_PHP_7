<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface Canino extends Animal {
    function latir(): string;
}

class Cachorro implements Canino{
    function respirar() {
       return 'Irei usar oxigênio!';
    }
    function latir(): string {
        return 'au au';
    }
}

$animal = new Cachorro();
var_dump($animal->latir());
echo '<br>';
echo $animal->respirar() . "<br";
echo $animal->latir() . "<br>"; 
echo '<br>';
var_dump($animal instanceof Cachorro);
echo '<br>';
var_dump($animal instanceof Canino);



?>