<div class="titulo">Traits #01</div>

<?php
trait validacao {
    public $a = 'valor a';
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'valor b';
    private $c = 'valor privado';
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class UsuarioA {
    use validacao, validacaoMelhor;

    public function imprimirValorC(){
        echo "<br>" . $this->c;
    }
}

$usuario = new UsuarioA();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a;
echo '<br>';
echo $usuario->b;
echo $usuario->imprimirValorC();


?>