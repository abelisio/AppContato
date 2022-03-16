<div class="Criar Tabelas">Criar Tabela</div>

<?php
require_once "conexao.php";


$sql = "CREATE TABLE IF NOT EXISTS contatos(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    contato VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";

} else{
    echo "ERRO:". $conexao->error;
}

$conexao->close();