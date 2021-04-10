<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style/login.css">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/af3dc3f21d.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">
    <div class="row m-5 no-gutters shadow-lg">
      <div class="col-md-6 d-none d-md-block">
        <img src="https://images.unsplash.com/photo-1597514110707-b988d3a08652?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="img-fluid" style="min-height:100%;" />
      </div>
      <div class="col-md-6 bg-white p-5">
        <h3 class="pb-3">Login</h3>
        <div class="form-style">
          <form>
            <div class="form-group pb-3">
              <input type="email" placeholder="Usuario" class="form-control" id="" aria-describedby="email">
            </div>
            <div class="form-group pb-3">
              <input type="password" placeholder="Senha" class="form-control" id="">
            </div>
            <div class="pb-2">
              <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-2">Entrar</button>
            </div>
          </form>
          <div class="sideline"></div>
          <div class="pt-3 text-center">
            Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>