<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];


?>