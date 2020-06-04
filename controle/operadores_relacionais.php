<div class="titulo">Operadores Relacionais</div>

<style>
p {
    margin-bottom: 0px;
}

hr{
    margin-top: 0px;
}
</style>

<?php

var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(4 < 23);
var_dump(1 <= 7);
var_dump(1 != 1);
var_dump(1 <> 1);

echo '<br>';
echo '<br>';
var_dump(1 == '1');
var_dump(1 === '1');
var_dump(1 != '1');
var_dump(1 !== '1');

echo "<p>Relacionais no IF/Else</p><hr>";
$idade = 25;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade < 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3); // se o primeiro numero for maior, retorna 1
var_dump(500 <=> 500); // se forem iguais, retorna 0
var_dump(3 <=> 500); // se o segundo numero for maior, retorna -1

echo '<p>Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>