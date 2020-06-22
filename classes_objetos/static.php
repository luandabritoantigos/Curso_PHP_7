<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estático)';

    public function mostrarA(){
        echo "Não estática = $this->naoStatic<br>";
        //echo "Estática = $this->static<br>";
        //echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA(){
        //echo "Não estática = $this->naoStatic<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
//$objetoA->mostrarStaticA();

A::mostrarStaticA();
echo A::$static;
echo '<br>';

A::$static = 'Alterado membro de classe!';
echo A::$static;

?>