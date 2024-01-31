<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
          <h3 class="text-center font-weight-light my-4">
            <?=$pageTitle;?>
          </h3>
        </div>
        <div class="card-body">
          <form action="modules/users/users.php" method="POST">
            <div class="form-floating mb-3">
              <input class="form-control" id="inputEmail" name="email" type="email" placeholder="Email" />
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

              <input id="action" name="action" value="create" type="hidden" />
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