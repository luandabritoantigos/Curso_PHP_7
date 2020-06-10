<div class="titulo">Foreach</div>

<?php
$semana = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach($semana as $dia){
    echo "$dia <br>";
}

echo '<br>';

foreach($semana as $chave => $valor){
    echo "$chave => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<br>';

foreach($matrix as $linha){
    foreach($linha as $letras){
        echo $letras;
    }
    echo '<br>';
}

$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar){
    $dobrar *= 2;
}

foreach($numeros as $valor){
    echo "$valor <br>";
}

?>