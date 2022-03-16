
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
   
    <link rel="stylesheet" href="css/bootstrap.css">


    <title>INSCRIÇÃO</title>
</head><div class="titulo">Consultar Registros</div>

<?php
require_once "conexao.php";

$sql = "SELECT id, nome, email FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
               
                <td><?= $registro['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>