<?php

  session_start();

  if (isset($_SESSION['user_data'])) {
    header('location: layout.php?page=list-users');
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>Sistema de Usuários - Login</title>

  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>

                <div class="card-body">
                  <form action="login.php" method="POST">
                    <div class="form-floating mb-3">
                      <input
                        class="form-control"
                        id="inputEmail"
                        name="email"
                        type="email"
                        placeholder="Email" 
                      />
                      <label for="inputEmail">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input
                        class="form-control"
                        id="inputPassword"
                        name="password"
                        type="password"
                        placeholder="Senha"
                      />
                      <label for="inputPassword">Senha</label>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                      <input
                        class="btn
                        btn-primary"
                        type="submit"
                        value="Enviar"
                      />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <div id="layoutAuthentication_footer">
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <?php if(isset($_GET['error'])): ?>
    <?php 
  
      switch ($_GET['error']) {
        case 'login_error':
          echo '<script> alert("Login ou senha inválido")</script>';
          break;
        
        case 'forbidden':
          echo '<script> alert("Acesso não permitido")</script>';
          break;
      }
  
    ?>
  <?php endif ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>

</html>