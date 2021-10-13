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
    <div class="navbar" id="menuAccueil">
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
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="53.936" height="53.936" viewBox="0 0 33.936 33.936">
          <g id="icon_navigation_close_24px" data-name="icon/navigation/close_24px" transform="matrix(0.719, 0.695, -0.695, 0.719, 16.672, 0)">
            <rect id="Boundary" width="24" height="24" fill="none" />
            <path id="_Color" data-name=" ↳Color" d="M14,1.41,12.59,0,7,5.59,1.41,0,0,1.41,5.59,7,0,12.59,1.41,14,7,8.41,12.59,14,14,12.59,8.41,7Z" transform="translate(5 5)" fill="#f1f1f1" />
          </g>
        </svg>

      </div>
    </li>
  </ul>
</nav>