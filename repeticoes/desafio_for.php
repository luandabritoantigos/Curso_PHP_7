<div class="titulo">Desafio For</div>


<!--
    Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php

$a = "";
for ($i = 0; $i < 5; $i++) {
    $a .= "#";
    echo $a . '<br>';
}

echo '<br>';

for ($a2 = "#"; $a2 !== "######"; $a2 .= "#") {
    echo $a2 . '<br>';
}


?>