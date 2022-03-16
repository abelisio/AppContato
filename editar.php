
<?php
require_once "conexao.php";


$conexao = novaConexao();


$cod = $_POST ["id"];
$nome= $_POST ["nome"];
$email = $_POST ["email"];


 if(count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];

    if(trim($dados['nome']) === "") {
        $erros['nome'] = 'Nome é obrigatório';
    }

    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

    if(!count($erros)) {

        $sql = "UPDATE contatos SET nome = '$nome', email = '$email'  WHERE id = '$cod' ";

        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $dados['email'],
            $dados['id'],
        ];

        $stmt->bind_param("ssssidi", ...$params);

        if($stmt->execute()) {
            unset($dados);
        }
    }
}



$conexao->close;

header('Location: listar.php');

?>