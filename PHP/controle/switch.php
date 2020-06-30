<div class="titulo">Switch</div>

<?php
$categoria = 'SUV basico';
$preco = 0.0;
$carro = '';

switch (strtolower($categoria)){
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
    case 'suv basico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "Carro: $carro<br>Preço: $precoFormatado";


?>