<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$email = $_POST['email'];


$sql = "INSERT INTO contatos
(nome, contato, email) 
VALUES ( '$nome','$contato','$email')";


$conexao = novaConexao();
$resultado = $conexao->query($sql);

$conexao->close();

header('Location: listar.php');
?>

<!-- <?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= "" // $erro ?>
    <!-- </div> -->
<?php endforeach ?> -->
