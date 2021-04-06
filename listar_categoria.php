<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/af3dc3f21d.js" crossorigin="anonymous"></script>

  <title>Listagem de categoria</title>
</head>
<body>

          <div class="container" style="margin-top: 40px">
              <h3>Lista de categorias</h3> <br>

              <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nome categoria</th>
                          <th scope="col">Ações</th>
                        </tr>
                      </thead>
                        <tr>
                          <?php

                          include 'conexao.php';
                          $sql = "SELECT * FROM `categoria`";
                          $busca = mysqli_query($conexao, $sql);

                          while ($array = mysqli_fetch_array($busca)) {
                            $id_categoria = $array['id_categoria'];
                            $categoria = $array['nome_categoria'];
                          ?>
                          <tr>
                          <td> <?php echo $id_categoria ?></td>
                          <td> <?php echo $categoria ?></td>
                         
                          <!-- botões de ações -->
                          <td>
                            <a class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar" 
                            href="editar_produto.php?id=<?php echo $id_categoria?> " role="button"><i class="far fa-edit"></i></a>

                            <a class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Excluir" 
                            href="deletar_produto.php?id=<?php echo $id_categoria?> " role="button"><i class="far fa-trash-alt"></i></a>
                        </td>
                          </tr>

                          <?php } ?> <!-- fecha a chave depois das td para preencher as linhas --> 
                        </tr>
                    </table>

                        <div style="text-align: right;">
                          <a href="index.php" role="button" class="btn btn-primary">Voltar</a>
                        </div>
            </div>



  <!-- JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>