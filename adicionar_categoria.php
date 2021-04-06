<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Categoria</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Fontawesome -->
   <script src="https://kit.fontawesome.com/af3dc3f21d.js" crossorigin="anonymous"></script>
</head>

<style type="text/css">

    #container {
      width: 500px; 
    }
</style>

<body>
    
          <div class="container" id="container" style="margin-top: 40px">
                <h4>Cadastro de categoria</h4>
                  <form action="_inserir_categoria.php" method="post" style="margin-top: 20px">
                    <div class="form-group">
                      <label>Nome Categoria</label>
                      <input type="text" class="form-control" name="ncategoria" placeholder="Insira o nome da categoria" required>
                    </div>
                      <div style="text-align: right;">
                      <a href="menu.php" role="button" class="btn btn-primary">Voltar</a>
                      <button type="submit" class="btn btn-success">Salvar</button>
                      </div>
                  </form>
          </div>

<!-- JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>