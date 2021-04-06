<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) 
VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade, '$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
      <div class="container" style="width: 500px; margin-top: 20px; text-align: center">

          <h4>Produto adicionado com sucesso!</h4>

              <div style="padding-top: 20px">
                <a href="adicionar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastar novo item</a> 
              </div>
      </div>
