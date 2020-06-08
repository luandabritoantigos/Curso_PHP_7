<div class="titulo">Desafio Sorteio</div>

<?php
$nome = ["Elza", "Rapunzel", "Banca de neve", "Cinderela"];

$sorteio = array_rand($nome);

echo "<div center><h1>$nome[$sorteio]</h1></div>";


?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>