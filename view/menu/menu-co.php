<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="logoPrincipal">
      
      <!-- //TODO Ajouter le retour page Accueil sur le logo -->
      <!-- Logo
       Ajouter une classe hidden //TODO car il n'apparait pas sur cette session
      <a class="navbar-brand" href="?section=accueil">Home Safe</a> -->
    </div>

    <!-- Icone menu-burger -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="navbar" id="menuAccueil">
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
          <a href="?section=deconnexion" class="nav-link" id="deconnexion"><?= $_SESSION['pseudo']; ?> Se déconnecter</a><!-- modification ici, anciennement FAQ alors que le href renvoyé à connecxion -->
        </li>
      </ul>

    </div>

  </div>
</nav>



<nav class="menuPermanent">
  <ul class="passeDevant">
    <li class="collapse blocNav">
      <div class="navJaune d-flex justify-content-center"><a href="?section=accueil" class="nav-link" id="register">Accueil</a></div>
    </li>
    <li class="collapse blocNav">
      <div class="navBleu d-flex justify-content-center"><a href="?section=association" class="nav-link" id="association">A propos</a></div>
    </li>
    <li class="collapse blocNav">
      <div class="navViolet d-flex justify-content-center"><a href="?section=contact" class="nav-link" id="contact">Contact</a></div>
    </li>
    <li class="collapse blocNav">
      <div class="navJaune d-flex justify-content-center"><a href="?section=faq" class="nav-link" id="faq">FAQ</a></div>
    </li>
    <li id="iconPlus" class="navBlanc">
      <div>
        <div class="vertical"></div>
        <div class="horizontal"></div>
      </div>
    </li>
  </ul>
</nav>