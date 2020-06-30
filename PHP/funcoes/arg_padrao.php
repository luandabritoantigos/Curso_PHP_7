<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senh@r', $sobrenome = 'Cliente'){
    return "Bem vind@, $nome $sobrenome! <br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante', 'Pizza');

?>