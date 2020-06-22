<div class="titulo">Traits #02</div>

<?php
trait validacao {
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor{
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}

class UsuarioB {
    use validacao, validacaoMelhor{
        validacaoMelhor::validarString insteadOf validacao;

        validacao::validarString as validacaoSimples;
    }
}

$usuarioB = new UsuarioB();
var_dump($usuarioB->validarString(' '));
echo '<br>';
var_dump($usuarioB->validacaoSimples(' '));


?>