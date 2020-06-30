<div class="titulo">PDO: Alterar</div>

<?php
require_once 'conexao_pdo.php';

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'https://gui.co',
    1,
    12005,
    10,
]);

echo $resultado ? 'Sucesso' : print_r($stmt->errorInfo());



?>