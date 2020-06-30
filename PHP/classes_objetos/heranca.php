<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }
    
    function __destruct() {
        echo 'Pessoa diz: Tchau!';
    }

    public function apresentar(){
        return "Nome: $this->nome, Idade: $this->idade <br>";
    }
}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login) {
        //$this->nome = $nome;
       // $this->idade = $idade;
       parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário criado!<br>';
    }

    function __destruct() {
        echo "Usuário diz: Tchau!<br>";
        parent::__destruct();
    }
   
    public function apresentar() {
        echo parent::apresentar();
        return "@$this->login <br>";
    }
}

$usuario = new Usuario('Maria', 21, 'maria_usuario');
echo $usuario->apresentar();

unset($usuario);

?>