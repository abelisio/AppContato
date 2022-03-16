<?php 

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

        require_once "conexao.php";
        
        $sql = "INSERT INTO contatos 
        (nome,contato, email)
        VALUES ( '$nome', '$contato', '$email')";


 
        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $dados['contato'],
            $dados['email'],
                        
        ];

        $stmt->bind_param("ssssid", ...$params);

        if($stmt->execute()) {
            unset($dados);
        }
    }
}

?>

<!-- <?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= "" // $erro ?>
    <!-- </div> -->
<?php endforeach ?> -->