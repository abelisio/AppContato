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
    <title>Cadastar Contatos</title>
</head>

<body>


<form action="back.php" method="post"> 
<div>
<td width="636" align="left" valign="middle" bgcolor="#FFFFFF" class="alert-heading"><span class="h1">Cadastro de Contatos</span></td>
  </div>
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="contato">Contato</label>
      <input type="text" class="form-control" name="contato" id="contato" placeholder="Telefone/Telemóvel">
    </div>
  </div>
 
  <button type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>

</form>
    </div>
</body>
