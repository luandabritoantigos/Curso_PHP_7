<div class="titulo">Métodos Mágicos</div>

<?php
class PessoaA {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!';
    }

    public function __toString(){
        return "$this->nome tem $this->idade anos.";
    }

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($name){
        echo "Lendo atributo não declarado: $name<br>";
    }

    public function __set($name, $value){
        echo "Alterando atributo não declarado: $name / $value";
    }

    public function __call($name, $arguments){
        echo " Tentando executar o método '$name'";
        echo ", com os parametros: ";
        print_r($arguments);
    }
}

$pessoa = new PessoaA('Maria', 25);
$pessoa->apresentar();      // chamando o __toString
echo $pessoa . "<br>";
$pessoa->nome = "João";
$pessoa->apresentar();      // chamando o __toString

echo $pessoa->nomeCompleto; // chamando o __get

$pessoa->nomeCompleto = 'Muito Legal!!!'; // chamando o __set

$pessoa->exec(1, 'teste', true, [1,2,3]); // chamando o __call

$pessoa = null;

?>