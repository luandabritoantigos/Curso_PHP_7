<div class="titulo">Construtor & Destrutor</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo '<br> E morreu!';
    }

    public function apresentar(){
        return "Nome: $this->nome <br> Idade: $this->idade";
    }

}

$p1 = new Pessoa('Maria', 18);
echo $p1->apresentar();

echo '<br>';

$p2 = new Pessoa('João', 18);
echo $p2->apresentar();
$p2 = null;

?>