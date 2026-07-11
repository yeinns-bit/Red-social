
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Abrir menú</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class="navbar-brand">
        <span class="brand-mark">W</span>
        <span class="brand-name">WalekerNET</span>
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">

      <div class="sidebar-search">
        <form class="form-inline" method="post" action="search.php" role="search">
          <label for="span5" class="sr-only">Buscar personas</label>
          <input type="text" name="search" class="form-control" id="span5" placeholder="Buscar personas">
        </form>
      </div>

      <p class="nav-label">Navegación</p>

      <ul class="nav navbar-nav">
        <li><a href="home.php"><i class="icon-home"></i> <span>Inicio</span></a></li>
        <li><a href="profile.php"><i class="icon-user"></i> <span>Perfil</span></a></li>
        <li><a href="photos.php"><i class="icon-picture"></i> <span>Fotos</span></a></li>
        <li><a href="friends.php"><i class="icon-group"></i> <span>Amigos</span></a></li>
        <li><a href="message.php"><i class="icon-envelope-alt"></i> <span>Mensajes</span></a></li>
      </ul>

      <ul class="nav navbar-nav nav-bottom">
        <li><a href="logout.php" class="nav-logout"><i class="icon-signout"></i> <span>Cerrar sesión</span></a></li>
      </ul>

    </nav>
  </div>
</header>
