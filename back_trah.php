<?php
require_once "conexao.php";

$registros = [];
$conexao = novaConexao();

if($_GET['excluir']) {
    $excluirSQL = "DELETE FROM contatos WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$sql = "SELECT id, nome, email FROM contatos";
$resultado = $conexao->query($sql);
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;   
}

$conexao->close;



$sql = "SELECT id, nome, email FROM cadastro";
$resultado = $conexao->query($sql);
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;   
}

// alterar

$cod = $_POST['id'];

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
        $sql = "UPDATE cadastro 
        SET nome = '$nome, email = '$email',
        
        WHERE id = '$cod'";

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

<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= "" // $erro ?>
    <!-- </div> -->
<?php endforeach ?>
