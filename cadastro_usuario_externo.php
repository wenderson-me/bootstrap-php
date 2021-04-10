<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registre-se</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/af3dc3f21d.js" crossorigin="anonymous"></script>
  <style>
  body {
    background: #E5E5E5;
  }
  </style>
</head>

<body>

  <div class="container" style="margin-top: 100px">
    <form action="_inserir_usuario_externo.php" class="shadow-sm p-3 mb-5 bg-white rounded" method="post">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Registre-se</h1>
              <p class="text-h3">Preencha os campos para criar um novo usuario. </p>
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="text" class="form-control shadow-sm p-3 bg-white rounded" name="nome" placeholder="Nome">
            </div>
            <div class="col">
              <input type="text" class="form-control shadow-sm p-3 bg-white rounded" name="usuario" placeholder="Usuario">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="email" class="form-control shadow-sm p-3 bg-white rounded" name="email" placeholder="Email">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="password" id="txtSenha" class="form-control shadow-sm p-3 bg-white rounded" name="senha" placeholder="Senha">
            </div>
            <div class="col">
              <input type="password" class="form-control shadow-sm p-3 bg-white rounded" oninput="validaSenha(this)" placeholder="Confirmar senha">
            </div>
          </div>
         <!-- <div class="row align-items-center mt-4">
            <div class="col">
              <select name="nivel" id="" class="form-control">
                <option value="1">Administrador</option>
                <option value="2">Vendedor</option>
                <option value="3">Visitante</option>
              </select>
            </div>
          </div>
          -->
          <div class="row justify-content-start mt-4">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Eu li e aceito os termos <a href="#">Termos e Condições</a>
                </label>
              </div>
            </div>
          </div>
          <button class="btn btn-primary mt-4">Finalizar</button>
        </div>
      </div>
    </form>
  </div>




  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<script>
    function validaSenha (input){ 
	    if (input.value != document.getElementById('txtSenha').value) {
      input.setCustomValidity('Repita a senha corretamente');
      } else {
          input.setCustomValidity('');
      }
    } 
</script>