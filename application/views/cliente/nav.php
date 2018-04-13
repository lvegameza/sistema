<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SISTEMA DE VENTAS  v1.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="font-size: 14px">Bivenido: <?= $usuario?>
              </a> 
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>init/logout_ci"><i class="fa fa-sign-out" aria-hidden="true"></i>
</a>
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">