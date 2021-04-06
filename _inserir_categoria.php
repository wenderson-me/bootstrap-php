<?php

include 'conexao.php';

$ncategoria = $_POST['ncategoria'];



echo $ncategoria;


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
      <div class="container" style="width: 500px; margin-top: 20px; text-align: center">

          <h4>Categoria adicionada com sucesso!</h4>

              <div style="padding-top: 20px">
                <a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-primary">Cadastar nova categoria</a> 
              </div>
      </div>