<link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/comum.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <style type="text/css">
    body {
	background-color: #EFEFEF;
}
    </style>
  
    

<?php
require_once "conexao.php";

$registros = [];
$conexao = novaConexao();

$cod = $_GET['id'];
$sql = "SELECT id, nome, contato, email FROM contatos WHERE id = '$cod'";
$resultado = $conexao->query($sql);
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;   
}

//$conexao->close;


?>
<title>* Lista de Contatos *</title>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="495" align="right" valign="middle" bgcolor="#FFFFFF"><img src="img/logo_rits.png" width="180" height="88" alt="" longdesc="http://listar.php" /></td>
    <td width="636" align="left" valign="middle" bgcolor="#FFFFFF" class="alert-heading"><span class="h1">Detalhes do Contato</span></td>
  </tr>
</table>
<blockquote>
  <table width="950" border="0" align="center">
    <tr>
      <td width="891" align="center" valign="top" bgcolor="#FFFFFF"><p class="align-content-lg-center"></p></td>
      <td width="49" align="center" valign="middle" bgcolor="#FFFFFF"><a href="listar.php" style="text-decoration:none"
>
      <i class="icofont-logout"></i>
      </a></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF"><table width="950" align="center" class="table table-hover table-striped table-bordered">
        <thead>
        </thead>
        <tr>
          <th width="200">Nome</th>
          <th width="200">Contato</th>
          <th width="121">Email</th>
          
        </tr>
        <tbody>
          <?php foreach($registros as $registro) : ?>
          <tr>
            <td align="left" valign="middle"><?= $registro['nome'] ?></td>
            <td align="left" valign="middle"><?= $registro['contato'] ?></td>
            <td align="left" valign="middle"><?= $registro['email'] ?></td>
          
          <?php endforeach ?>
        </tbody>
      </table></td>
    </tr>
  </table>
  <p>																																																																																							 
    <style>
    table > * {
        font-size: 1.2rem;
    }
    </style>
  </p>
</blockquote>
