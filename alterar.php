<link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/comum.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    
    <title>* Área Administrativa - Rits *</title>
 
 <?php 

require_once "conexao.php";

$conexao = novaConexao(); 

/* busca os dados do indice selcioando*/ 



    if($cod = $_GET['id']) {
        $sql = "SELECT * FROM contatos WHERE id = '$cod'";
		$stmt = $conexao->prepare($sql);
       // $stmt->bind_param("i", $_GET['id']);
        
        if($stmt->execute()) {
            $resultado = $stmt->get_result();
            if($resultado->num_rows > 0) {
                $dados = $resultado->fetch_assoc();
                if($dados['nome']) {
                   
                }
                if($dados['email']) {
                   
                }
            }
        }
    }
if(count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];

    if(trim($dados['nome']) === "") {
        $erros['nome'] = 'Nome é obrigatório';
    }

    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

   
    
}


?>

<tbody>

<form action="/editar.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="alterar">
    <div class="form-group row">
        <div class="col-sm-1">
            <input type="number" name="cod"
                class="form-control"
                value="<?= $_GET['id'] ?>"
                placeholder="Informe o código para consulta">
        </div>
        <div class="col-sm-2">
            
        </div>
    </div>
</form>

<form action="editar.php" method="post">
        
    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
    <td height="38" align="center">
        

        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" 
                class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
                id="nome" name="nome" placeholder="Nome"
                value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>

            </div>
      
            <div class="form-group col-md-4">
            <label for="contato">Contato</label>
            <input type="text" 
                class="form-control <?= $erros['contato'] ? 'is-invalid' : ''?>"
                id="contato" name="contato" placeholder="contato"
                value="<?= $dados['contato'] ?>">
            <div class="invalid-feedback">
                <?= $erros['contato'] ?>

            </div>

        <div class="form-group col-md-8">
            <label for="email">E-mail</label>
            <input type="text"
                class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>"
                id="email" name="email" 
                value="<?=$dados['email']?>">
               <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
     
          
            <br>
        <button class="btn btn-primary btn-lg bd-4">Alterar</button>
        </div>
       
</form>

</tbody>