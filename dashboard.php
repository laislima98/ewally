<?php include("base/header.php"); ?>
<div class="dashboard-wrapper">
  <div class="hidden-sm-up">
    <div class="toggle-menu-button" id="toggle-menu">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </div>
  <div class="menu" id="menu">
    <div class="menu__profile">
      <div class="menu__profile__img" style="background-image:url('./assets/img/perfil.jpg')"></div>
      <div class="menu__profile__details">
        Empresa Fictícia
      </div>
    </div>
    <ul class="menu__list">
      <li>
        <a href="">
          <i class="fa fa-home" aria-hidden="true"></i>
          <span>Início</span>
        </a>
      </li>
      <li>
        <a class="submenu-link" href="#transfer_options" aria-expanded="false" aria-controls="transfer_options" data-toggle="collapse">
          <i class="fa fa-exchange" aria-hidden="true"></i>
          <span>Transferência</span>
        </a>
        <ul class="submenu collapse" id="transfer_options">
          <li>
            <a href="">
              Nova Transferência
            </a>
          </li>
          <li>
            <a href="">
              Lista de Transferências
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="">
          <i class="fa fa-money" aria-hidden="true"></i>
          <span>Carregar Conta</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-area-chart" aria-hidden="true"></i>
          <span>Extrato</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Meus dados</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="dashboard">
    <div class="dashboard__home-details text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="dashboard__home-details__title white">
                <smal>
                  Empresa Fictícia
                </smal>
            </div>
            <div class="main-balance white">
              R$200,00
            </div>
            <small>
              <p class="text-center white">
                último acesso em 10/12/2017 às 15:13
              </p>
            </small>
          </div>
        </div>
      </div>
    </div>

    <div class="dashboard__home__actions">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="line-card">
              <div class="line-card__icon">
                <img src="assets/img/money.svg" alt="">
              </div>
              <div class="line-card__title">
                Nova transferência
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="line-card">
              <div class="line-card__icon">
                <img src="assets/img/smartphone.svg" alt="">
              </div>
              <div class="line-card__title">
                Carregar conta
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="line-card">
              <div class="line-card__icon">
                <img src="assets/img/wallet.svg" alt="">
              </div>
              <div class="line-card__title">
                Extrato
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("base/footer.php"); ?>
