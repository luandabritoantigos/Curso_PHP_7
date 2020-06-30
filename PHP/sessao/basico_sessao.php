<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';


if(isset($_SESSION['nome'])){
    if(!$_SESSION['nome']) {
        $_SESSION['nome'] = 'Gabriel';
    }
    
    if(!$_SESSION['email']) {
        $_SESSION['email'] = 'gabriel@zmail.com';
    }
}

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>
