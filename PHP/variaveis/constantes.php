<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
// TAXA_DE_JUROS = 2.5; Obs. não pode ser alterada.

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
define('NOVISSIMA_TAXA', $valorVariavel);
const NOVISSIMA_TAXA2 = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;
echo '<br>' . NOVISSIMA_TAXA2;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br>Linha: ' . __LINE__;
echo '<br>Arquivo: ' . __FILE__;
echo '<br>Diretório: ' . __DIR__;



?>