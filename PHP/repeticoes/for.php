<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo '<br>';

for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo '<br>';

for (; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++;
}

$semana = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

print_r($semana);

echo '<br>';
echo '<br>';

for ($i = 1; $i <= count($semana); $i++){
    echo "$semana[$i] <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<br>';

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]} <br>";
    }
}




?>