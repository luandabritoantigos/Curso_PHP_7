<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = array('laranja','abacaxi');

// FRUTAS[0] = 'banana'; Obs. não pode.
// FRUTAS[1] = 'banana'; Obs. não pode.

echo FRUTAS[0];

const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
// CARROS["BMW"] = "3251";

echo '<br>' . CARROS["fiat"];

define("CIDADES", array('Belo Horizonte', 'Recife'));

echo '<br>' . CIDADES[1];


?>