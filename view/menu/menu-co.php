<!-- Pour l'instant, pas de différence entre le menu connecté et non-connecté... -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home Safe</a> <!-- Le index.php ne fonctionne pas, remplacer par un dièse pour l'instant(qui ne marche pas non plus). Voir ce qui est mieux //TODO -->
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
          <a href="?section=association" class="nav-link" id="association">A propos</a>
        </li>
        <li class="nav-item">
          <a href="?section=contact" class="nav-link" id="contact">Contact</a>
        </li>
        <li class="nav-item">
          <a href="?section=faq" class="nav-link" id="faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a href="?section=termes" class="nav-link" id="termes">Termes et Conditions</a>
        </li>
        <li class="nav-item">
          <a href="?section=profil" class="nav-link" id="profil">Profil</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a href="?section=deconnexion" class="nav-link" id="deconnexion"><?= $_SESSION['nom']; ?>Se déconnecter</a><!-- rajouter le $session pour appeller la page connexion.php -->
        </li>
      </ul>
    </div>
  </div>
</nav>