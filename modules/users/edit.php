<?php

  session_start();

  if (!isset($_SESSION[md5('user_data')])) {
    header("location: index.php?error=forbidden");
  }

  $userData = $_SESSION[md5('user_data')];

  $data = explode(' - ', base64_decode($_GET['token']));

?>

<?php include_once '../../validate.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>Sistema de Usuários</title>

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <?php include_once '../../components/top-navbar.php'; ?>

  <div id="layoutSidenav">
    <?php include_once '../../components/side-navbar.php'; ?>

    <div id="layoutSidenav_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">
                    Edição de Usuário
                  </h3>
                </div>
                <div class="card-body">
                  <form action="users.php" method="POST">
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputEmail" name="email" type="email" value="<?= $data[0]; ?>" placeholder="Email" />
                      <label for="inputEmail">Email</label>
                    </div>
                    <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                          <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Senha" />
                          <label for="inputPassword">Senha</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                          <input class="form-control" id="inputPasswordConfirm" name="password-confirm" type="password" placeholder="Confirm password" />
                          <label for="inputPasswordConfirm">
                            Confirmar senha
                          </label>
                        </div>
                      </div>

                      <input id="id" name="id" value="<?= $_GET['id']; ?>" type="hidden" />

                      <input id="action" name="action" value="update" type="hidden" />
                    </div>

                    <div class="mt-4 mb-0">
                      <div class="d-grid">
                        <input class="btn btn-primary btn-block" type="submit" value="Salvar" />
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center py-3">
                  <div class="small">
                    <a href="index.php">
                      Tem uma conta? Faça o login
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <?php include_once '../../components/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../../js/datatables-simple-demo.js"></script>
  </div>
</body>

</html>