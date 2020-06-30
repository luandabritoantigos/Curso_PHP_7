<div class="titulo">Desafio Palindromo</div>

<?php

function verificarPalindromo($palavra){
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo verificarPalindromo("arara");

function palindromo($palavra){
$ultimoIndice = strlen($palavra) - 1;
for ($i = 0; $i < $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return 'Sim';
}

echo '<br>' , palindromo('ane');
?>