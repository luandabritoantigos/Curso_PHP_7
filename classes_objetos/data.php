<div class="titulo">Classe Data</div>

<?php
class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "$this->dia/$this->mes/$this->ano";
    }
}

$d1 = new Data();
echo $d1->apresentar();

$casamento = new Data();
$casamento->dia = 20;
$casamento->mes = 6;
$casamento->ano = 2010;

echo '<br>' . $casamento->apresentar();

?>