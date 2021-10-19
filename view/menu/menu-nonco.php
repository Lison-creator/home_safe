<nav class="navbar navbar-expand-lg z-index-2">
  <div class="container-fluid">
    <div class="logoPrincipal">
      <!-- Logo
       //TODO 
      <a class="navbar-brand" href="?section=accueil">Home Safe</a> -->
    </div>

    <!-- Icone menu-burger -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="navbar offset-left-1" id="menuAccueil">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a href="?section=connexion" class="nav-link" id="connexion"> Se connecter</a><!-- modification ici, anciennement FAQ alors que le href renvoyé à connecxion -->
        </li>
        <li class="nav-item">
          <a href="?section=inscription" class="nav-link" id="inscription">S'inscrire</a>
        </li>
      </ul>
    </div>

  </div>
</nav>
<!-- Est-ce qu'on veut faire juste un bouton cliquable pour le menu ou est-ce qu'on le tranforme en page qui est présente sur toutes les autres pages? -->

<!-- Menu permanent -->
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
      <div class="animationCroixFun">
        <div class="vertical"></div>
        <div class="horizontal"></div>
      </div>
    </li>
  </ul>
</nav>