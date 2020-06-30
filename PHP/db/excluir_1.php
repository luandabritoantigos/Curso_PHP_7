<div class="titulo">Excluir Registro #01</div>

<?php
require_once 'conexao.php';

$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

echo $resultado ? 'Sucesso' : 'Erro:' . $conexao->error;

$conexao->close();

?>