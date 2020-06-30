<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Classe A) Público = $this->publico<br>";
        echo "Classe A) Protegido = $this->protegido<br>";
        echo "Classe A) Privado = $this->privado<br>";  
    }

    protected function vaiPorHeranca(){
        echo 'Serei transmitido por herença!<br>';
    }

    private function naoMostrar(){
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A();
$a->mostrarA();

class B extends A {
    public function mostrarB() {
        echo "Classe B) Público = $this->publico<br>";
        echo "Classe B) Protegido = $this->protegido<br>";
        //echo "Classe B) Privado = $this->privado<br>";  

        parent::vaiPorHeranca();
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();


?>