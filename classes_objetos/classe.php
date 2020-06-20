<div class="titulo">Primeira Classe</div>

<?php
class Cliente{
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar(){
        return "Nome: $this->nome <br> Idade: $this->idade";
    }
}

$c1 = new Cliente();
$c1->nome = 'Maria Silva';
$c1->idade = 27;
$c1->apresentar();

$c2 = new Cliente();
$c2->nome = 'José';
$c2->idade = 45;
$c2->apresentar();

echo $c1->nome . '<br>';
echo $c2->apresentar();

?>