<?php

    include 'conexao.php';
    include 'script/password.php';


    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];
    $status = 'Ativo';

    echo $sql = "INSERT INTO usuario (nome, usuario, email, senha, nivel, status)
    values ('$nome', '$usuario', '$email', sha1('$senha'), $nivel, '$status)";

    $inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
      <div class="container" style="width: 500px; margin-top: 20px; text-align: center">

          <h4>Usuario cadastrado com sucesso!</h4>

              <div style="padding-top: 20px">
                <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar para listagem</a> 
              </div>
      </div>