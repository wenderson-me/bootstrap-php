<?php 
include 'conexao.php';
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Lojinha</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Fontawesome -->
   <script src="https://kit.fontawesome.com/af3dc3f21d.js" crossorigin="anonymous"></script>


  <style type="text/css">

    #container {
      width: 500px; 
    }
  </style>


</head>
<body>  

        <div class="container" id="container" style="margin-top: 40px">
                <h4>Formulario de Cadastro</h4>
                  <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
                      <?php
                      $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";

                      $buscar= mysqli_query($conexao, $sql);
                      while ($array = mysqli_fetch_array($buscar)) {
                            $id_estoque = $array['id_estoque'];
                            $nroproduto = $array['nroproduto'];
                            $nomeproduto = $array['nomeproduto'];
                            $categoria = $array['categoria'];
                            $quantidade = $array['quantidade'];
                            $fornecedor = $array['fornecedor'];
                      
                    ?>
                    <div class="form-group">
                      <label>Nº Produto</label>
                      <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
                      <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                    </div>

                    <div class="form-group">
                      <label>Nome Produto</label>
                      <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
                    </div>

                    <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
                      <?php
                              include 'conexao.php';
                                $sql = "SELECT * FROM `categoria` order by nome_categoria ASC";
                                $buscar = mysqli_query($conexao, $sql);

                                while ($array = mysqli_fetch_array($buscar)) {
                                $id_categoria = $array['id_categoria'];
                                $categoria = $array['nome_categoria'];
                            ?>
                            <option><?php echo $categoria ?></option>
                            <?php } ?>
                      </select>
                    </div>

                      <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
                      </div>

                      <div class="form-group">
                        <label>Fornecedor</label>
                        <select class="form-control" name="fornecedor" value="<?php echo $nroproduto ?>">
                        <?php
                                include 'conexao.php';
                                $sql = "SELECT * FROM `fornecedor`";
                                $buscar = mysqli_query($conexao, $sql);

                                while ($array = mysqli_fetch_array($buscar)) {
                                $id_fornecedor = $array['id_fornecedor'];
                                $fornecedor = $array['nome_fornecedor'];
                            ?>
                            <option><?php echo $fornecedor ?></option>
                            <?php } ?>
                        </select>
                      </div>

                      <div style="text-align: right;">
                      <button type="submit" class="btn btn-success">Atualizar</button>
                    </div>
                    <?php } ?>
                  </form>
        </div>



  <!-- JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>