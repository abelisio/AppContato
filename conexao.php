<?php
// funcão para conecção com o banco de dados
function novaConexao($banco='app_contatos'){  
    $servidor = '127.0.0.1:3306'; // endereço do servidor:porta
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);
  
    if($conexao->connect_error){
        die('Erro'. $conexao->connect_error);
        //ou popde usar
  //  echo('Erro'. $conexao->connect_error);
   // exit();

    }

    return $conexao;

}