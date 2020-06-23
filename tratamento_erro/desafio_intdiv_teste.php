<div class="tituto">Desafio Intdiv Teste</div>

<?php
include_once 'desafio_intdiv.php';
use function \Desafio\intdiv;

try{
    echo intdiv(8, 3) . '<br>';
}catch(\Desafio\DivisaoException $e){
    echo "Erro encontrado: {$e->getMessage()}<br>";
}

try{
    echo intdiv(8, 0) . '<br>';
}catch(DivisionByZeroError $e){
    echo "Divisão por zero<br>";
}

try{
    echo intdiv(8, 2) . '<br>';
}catch(\Desafio\DivisaoException $e){
    echo "<br>Erro encontrado: {$e->getMessage()}<br>";
}

try{
    echo \intdiv(8, 3) . '<br>';
}catch(\Desafio\DivisaoException $e){
    echo "<br>Erro encontrado: {$e->getMessage()}<br>";
}


?>