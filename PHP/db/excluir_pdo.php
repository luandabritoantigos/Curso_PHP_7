<div class="titulo">PDO: Excluir</div>

<?php
require_once 'conexao_pdo.php';

$sql = "DELETE FROM cadastro WHERE id = :id";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 8, PDO::PARAM_INT);

echo $stmt->execute() ? 'Sucesso' :  print_r($stmt->errorInfo());

//$conexao->close();

?>