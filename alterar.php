<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/comum.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/icofont.min.css">

<title>Editar</title>

<?php

require_once "conexao.php";

$conexao = novaConexao();

/* busca os dados do indice selcioando*/



if ($cod = $_GET['id']) {
    $sql = "SELECT * FROM contatos WHERE id = '$cod'";
    $stmt = $conexao->prepare($sql);
    // $stmt->bind_param("i", $_GET['id']);

    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
            if ($dados['nome']) {
            }
            if ($dados['email']) {
            }
        }
    }
}
if (count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];

    if (trim($dados['nome']) === "") {
        $erros['nome'] = 'Nome é obrigatório';
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/comum.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Editar</title>
</head>
<body>

  

    <form action="back.php" method="post"> 

    <input type="hidden" name="dir" value="db">
        <input type="hidden" name="file" value="alterar">
        <div class="form-group row">
            <div class="col-sm-4">
                <input type="number" name="cod" class="form-control" value="<?= $_GET['id'] ?>" placeholder="Informe o código para consulta">
            </div>
        </div>
        </div>
<div>
<td width="636" align="left" valign="middle" bgcolor="#FFFFFF" class="alert-heading"><span class="h1">Editar</span></td>
  </div>
<div class="form-group">
    
    <label for="nome">Nome</label>
    <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $dados['nome'] ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= $dados['email'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="contato">Contato</label>
      <input type="text" class="form-control <?= $erros['contato'] ? 'is-invalid' : '' ?>" id="contato" name="contato" placeholder="contato" value="<?= $dados['contato'] ?>">
    </div>
  </div>
 
  <button type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>

</form>
    </div>

</body>