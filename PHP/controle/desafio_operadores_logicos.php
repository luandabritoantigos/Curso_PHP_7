<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="POST">
    <div>
        <label for="t1">Tabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Tabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php
if (isset($_POST['t1'])) {
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $tv = '';
    $sorvete = false;
    
    if(!!$t1 and !!$t2) {
        $sorvete = true;
        $tv = '50"';
    } elseif (!!$t1 xor !!$t2) {
        $tv = '32"';
        $sorvete = true;
    }
    
    if ($tv){
        echo "Vamos comprar uma TV de $tv e tomar sorvete";
    } else{
        echo "Sem TV dessa vez e sem sorvete.";
    }
}
?>