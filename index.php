<?php include("base/header.php"); ?>

<div class="login-view">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="login-content text-center">
          <div class="login-content__brand">
            <img src="assets/img/ewally-logo-branco.png" alt="">
          </div>
          <form action="" class="login-content__form">
            <div class="form-group">
              <input type="text" id="email" class="input-line white">
              <label for="email" class="login-label white">Email</label>
            </div>
            <div class="form-group">
              <input type="password" id="password" class="input-line white">
              <label for="password" class="login-label white">Senha</label>
            </div>
            <div class="form-group">
              <a href="localhost/ewally/dashboard.php">
                <button class="theme-button white block">
                  Entrar
                </button>
              </a>
            </div>
          </form>
          <div class="login-info">
            <small>
              <a href="#" class="white">Cadastrar</a>
            </small>
            <small>
              <a href="#"  class="white">Esqueceu a senha?</a>
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("base/footer.php"); ?>
