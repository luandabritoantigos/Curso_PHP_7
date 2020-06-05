<div class="titulo">Desafio Switch</div>

<form action="#" method="POST">
    <div>
        Você quer converter distâncias:
        <br>
        <input type="text" name="param1">
        <select name="conversao1" id="conversao1">
            <option value="km-milha">Km -> Milha</option>
            <option value="milha-km">Milha -> Km</option>
            <option value="metro-km">Metro -> Km</option>
            <option value="km-metro">Km -> Metro</option>
        </select>
        <button>Calcular</button>
    </div>
    <div>
        Ou temperaturas:
        <br>           
        <input type="text" name="param2">
        <select name="conversao2" id="conversao2">
            <option value="c-f">°C -> °F</option>
            <option value="f-c">°F -> °C</option>
        </select>
        <button>Calcular</button>
    </div> 
    
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
//const FATOR_C_F = 9/5;

if(isset($_POST['conversao1'])){
    $valor = $_POST['param1'] ? $_POST['param1'] : 0;
    $opcao = $_POST['conversao1'];

    switch($opcao){
        case 'km-milha':
            $resultado = $valor * FATOR_KM_MILHA;
            $mensagem = "$valor Km(s) = $resultado milha(s)";
        break;
        case 'milha-km':
            $resultado = $valor / FATOR_KM_MILHA;
            $mensagem = "$valor milha(s) = $resultado Km(s)";
        break;
        case 'metro-km':
            $resultado = $valor / FATOR_METRO_KM;
            $mensagem = "$valor metro(s) = $resultado Km(s)";
        break;
        case 'km-metro':
            $resultado = $valor * FATOR_METRO_KM;
            $mensagem = "$valor km(s) = $resultado metro(s)";
            break;
    }
    echo $mensagem;
}

if (isset($_POST['conversao2'])){
    $valor = $_POST['param2'] ?? 1;
    $opcao = $_POST['conversao2'];

    switch($opcao){
        case 'c-f':
            $resultado = ($valor * 9/5) + 32 ;
            $mensagem = "{$valor}°C = {$resultado}°F";
            break;
        case 'f-c':
            $resultado = ($valor - 32) * 5/9;
            $mensagem = "{$valor}°F = {$resultado}°C";
            break;
    }
    echo "<br>" . $mensagem;
}
?>