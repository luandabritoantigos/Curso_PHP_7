<?php namespace Desafio;

use Exception;

?>

<div class="titulo">Desafio Intdiv</div>


<?php

class DivisaoException extends \Exception {
   
}

function intdiv($a, $b){
    if($b == 0){
        throw new \DivisionByZeroError();
    }

    if(!is_int($a / $b)){
        throw new DivisaoException('Resultado não inteiro');
    }

    return $a / $b;
}

?>