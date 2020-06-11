<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem(){
    return 'Seja bem vind@!';
}

obterMensagem();
$texto = obterMensagem();
echo $texto;
echo '<br>' . obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vind@, $nome!";
}

echo '<br>' , obterMensagemComNome("Luanda");

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(45, 75);
echo '<br>', soma($x, $y);

function trocarValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo "<br> $variavel";

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5);
echo "<br> $variavel";



?>