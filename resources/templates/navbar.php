<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #82E0FF;">
  <div class="col-sm-1">
    <a class="navbar-brand" href="home.php">
      <img src="../resources/img/logo.png" width="32" height="35" class="d-inline-block align-top" alt="">
    </a>
  </div>
  <div class="col-sm-2">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
  </div>
  <div class="col-sm-6">
    <form class="form-inline my-2 my-lg-0" method="GET" action="../views/resultado_busqueda.php">
      <input name="keyword" class="form-control mr-sm-2" style="width:80%;" type="search" placeholder="Buscar"
        aria-label="Search" value="<?php echo isset($keyword) ? $keyword : ''; ?>">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
  <div class="col-sm-3">
    <div class="d-flex justify-content-end" style="padding-right:50px;">
      <ul class="navbar-nav">
        <?php
          if (!isset($_SESSION)) {
            session_start();
          }
          if (isset($_SESSION['email'])) {
              echo '<li class="nav-item active" style="padding-right: 50px;">
              <a href="../views/shopping-cart.php"><img src="../resources/img/cart.png" width="32" height="35"></img></a> <span id="cartBadge" class="badge badge-light">';
              echo isset($_SESSION['shopping-cart']) ? sizeof($_SESSION['shopping-cart']) : 0;
              echo '</span></li>';
              echo '<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Mi cuenta
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile.php">Mi perfil</a>
                <a class="dropdown-item" href="#">Mis ventas</a>
                <a class="dropdown-item" href="../views/purchases.php">Mis compras</a>';
                if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                  echo '<a class="dropdown-item" href="../views/liquidaciones.php">Liquidaciones</a>';
                  echo '<a class="dropdown-item" href="../views/estadisticas.php">Estadísticas</a>';
              }
                echo '<div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../controllers/logout.php">Cerrar sesion</a>
              </div>
            </li>';
          } else {
              echo '<li class="nav-item active">
              <a class="nav-link" href="../views/registrar.php">Registrarse</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../views/ingresar.php">Iniciar sesion</a>
            </li>';
          }
        ?>

      </ul>
    </div>
  </div>
</nav>
