<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao, $sql);

?>

<script src="https://kit.fontawesome.com/af3dc3f21d.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body {
  background: #E5E5E5;
}
</style>
  <body>
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="width: 500px; margin-top: 20px; text-align: center">
          <h4>Produto excluido com sucesso!</h4>
              <div style="padding-top: 20px">
              <a href="listar_produto.php"  role="button" class="btn btn-primary btn-lg mt-4"><i class="fas fa-arrow-circle-left"></i></a> 
              </div>
        </div>
      </body>