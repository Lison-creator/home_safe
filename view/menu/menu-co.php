<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index">Slurp Cacahuètes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="?section=accueil" id="register">Accueil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
            <a href="?section=apropos" class="nav-link" id="apropos">A propos</a>
        </li>
        <li class="nav-item">
            <a href="?section=contact" class="nav-link" id="contact">Contact</a>
        </li>
        <li class="nav-item">
            <a href="?section=cacahuete_doree" class="nav-link" id="cacahuete_doree">Cacahuète dorée</a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
            <a href="?section=deconnexion" class="nav-link" id="deconnexion"><?= $_SESSION['nom']; ?> Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>