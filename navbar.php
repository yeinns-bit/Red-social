
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
        <span class="brand-ball" aria-hidden="true">
          <svg viewBox="0 0 100 100" width="30" height="30">
            <circle cx="50" cy="50" r="46" fill="#fff" stroke="#12161f" stroke-width="7"/>
            <path d="M4 50a46 46 0 0 1 92 0z" fill="#E3350D"/>
            <rect x="4" y="46" width="92" height="8" fill="#12161f"/>
            <circle cx="50" cy="50" r="15" fill="#12161f"/>
            <circle cx="50" cy="50" r="9" fill="#fff"/>
          </svg>
        </span>
        <span class="brand-name">PokéRed</span>
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">

      <div class="sidebar-search">
        <form class="form-inline" method="post" action="search.php" role="search">
          <label for="span5" class="sr-only">Buscar personas</label>
          <input type="text" name="search" class="form-control" id="span5" placeholder="Buscar entrenadores">
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
        <li>
          <button type="button" class="nav-theme" onclick="toggleTheme()">
            <i class="icon-adjust"></i> <span class="theme-label">Modo oscuro</span>
          </button>
        </li>
        <li><a href="logout.php" class="nav-logout"><i class="icon-signout"></i> <span>Cerrar sesión</span></a></li>
      </ul>

    </nav>
  </div>
</header>
