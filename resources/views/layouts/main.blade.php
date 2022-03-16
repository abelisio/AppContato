<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/comum.css">
        <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/icofont.min.css">
         <link rel="stylesheet" href="css/login.css">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <title>@yield('title')</title>
        
</head>
<body>
<form action="back.php" method="post"> 
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
@yield('content')
<footer>
    <p>Lista de Contatos &copy; 2022</p>
</footer>
</html>