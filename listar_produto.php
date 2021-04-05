<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Listagem de produtos</title>
</head>
<body>

          <div class="container" style="margin-top: 40px">
              <h3>Lista de produtos</h3> <br>

              <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Nº Produto</th>
                          <th scope="col">Nome produto</th>
                          <th scope="col">Categoria</th>
                          <th scope="col">Quantidade</th>
                          <th scope="col">Fornecedor</th>
                        </tr>
                      </thead>
                        <tr>
                          <?php

                          include 'conexao.php';
                          $sql = "SELECT * FROM `estoque`";
                          $busca = mysqli_query($conexao, $sql);

                          while ($array = mysqli_fetch_array($busca)) {
                            $id_estoque = $array['id_estoque'];
                            $nroproduto = $array['nroproduto'];
                            $nomeproduto = $array['nomeproduto'];
                            $categoria = $array['categoria'];
                            $quantidade = $array['quantidade'];
                            $fornecedor = $array['fornecedor'];
                          ?>

                          <td> <?php echo $nroproduto ?></td>
                          <td> <?php echo $nomeproduto ?></td>
                          <td> <?php echo $categoria ?></td>
                          <td> <?php echo $quantidade ?></td>
                          <td> <?php echo $fornecedor ?></td>
                          <?php } ?> <!-- fecha a chave depois das td para preencher as linhas --> 
                        </tr>
                    </table>
          </div>



  <!-- JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>