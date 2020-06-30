<div class="titulo">Inserir Registro #01</div>

<?php
require_once 'conexao.php';

$sql = "INSERT INTO cadastro 
(nome, nascimento, email, site, filhos, salario)
VALUES(
    'Joana',
    '2001-03-05',
    'joana@gmail.com',
    'https://www.joana.sites.com.br',
    1,
    5500.50
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

echo $resultado ? 'Sucesso' : 'Erro: ' . $conexao->error;

$conexao->close();

?>