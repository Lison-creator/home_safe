<!-- Est-ce qu'on veut faire juste un bouton cliquable pour le menu ou est-ce qu'on le tranforme en page qui est présente sur toutes les autres pages? -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index">Home Safe</a>
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
            <a href="?section=association" class="nav-link" id="association">L'association</a>
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
      </ul>
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
            <a href="?section=connexion" class="nav-link" id="connexion">Se connecter</a><!-- modification ici, anciennement FAQ alors que le href renvoyé à connecxion -->
        </li>
        <li class="nav-item">
            <a href="?section=inscription" class="nav-link" id="inscription">S'inscrire</a>
        </li>
      </ul>
    </div>
  </div>
</nav>