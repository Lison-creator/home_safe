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



  <!-- Ici c'est le menu editer Modifier mon profil, Paramètre, sécurité... -->
<nav class="navbar menuEditer">
    <ul>
        <li><svg id="PROFIL" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path id="Union_1" data-name="Union 1" d="M0,370v-2c0-2.2,3.6-4,8-4s8,1.8,8,4v2Zm4-12a4,4,0,1,1,4,4A4,4,0,0,1,4,358Z" transform="translate(0 -354)" fill="#9b9b9b"/></svg> Modifier mon profil</li>
        <li><svg id="icon_action_settings_24px" data-name="icon/action/settings_24px" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
        <rect id="Boundary" width="20" height="20" fill="none"/><path id="_Color" data-name=" ↳Color" d="M9.043,16.625H5.957a.4.4,0,0,1-.386-.353l-.289-2.2a5.542,5.542,0,0,1-1.3-.81l-1.919.832a.394.394,0,0,1-.133.023.377.377,0,0,1-.339-.21L.046,11.025a.453.453,0,0,1,.1-.53L1.772,9.123a5.666,5.666,0,0,1-.058-.81,5.561,5.561,0,0,1,.067-.81L.152,6.131a.423.423,0,0,1-.1-.53L1.6,2.722a.381.381,0,0,1,.335-.215.354.354,0,0,1,.137.028l1.919.832a5.725,5.725,0,0,1,1.3-.81l.289-2.2A.386.386,0,0,1,5.957,0H9.043a.4.4,0,0,1,.386.353l.289,2.2a5.569,5.569,0,0,1,1.3.81l1.919-.832a.394.394,0,0,1,.133-.023.377.377,0,0,1,.339.21L14.954,5.6a.452.452,0,0,1-.1.53L13.228,7.5a5.57,5.57,0,0,1,.058.81,7.3,7.3,0,0,1-.048.81l1.611,1.372a.423.423,0,0,1,.1.53L13.4,13.9a.381.381,0,0,1-.335.215.354.354,0,0,1-.137-.028l-1.919-.832a5.671,5.671,0,0,1-1.3.81l-.289,2.2A.376.376,0,0,1,9.043,16.625ZM7.5,5.2A3.015,3.015,0,0,0,4.607,8.313,3.015,3.015,0,0,0,7.5,11.43a3.015,3.015,0,0,0,2.893-3.117A3.015,3.015,0,0,0,7.5,5.2Z" transform="translate(2.5 2.188)" fill="#9b9b9b"/></svg> Paramètres</li>
        <li><svg id="Icon_awesome-lock" data-name="Icon awesome-lock" xmlns="http://www.w3.org/2000/svg" width="12" height="14" viewBox="0 0 12 14"><path id="Icon_awesome-lock-2" data-name="Icon awesome-lock" d="M10.714,6.125h-.643V4.156A4.12,4.12,0,0,0,6,0,4.12,4.12,0,0,0,1.929,4.156V6.125H1.286A1.3,1.3,0,0,0,0,7.438v5.25A1.3,1.3,0,0,0,1.286,14h9.429A1.3,1.3,0,0,0,12,12.688V7.438A1.3,1.3,0,0,0,10.714,6.125Zm-2.786,0H4.071V4.156a1.929,1.929,0,1,1,3.857,0Z" fill="#9b9b9b"/></svg> Sécurité</li>
        <li><svg id="icon_alert_notification_important_24px" data-name="icon/alert/notification_important_24px" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect id="Boundary" width="20" height="20" fill="none"/><path id="_Color" data-name=" ↳Color" d="M7,17.5a1.587,1.587,0,0,1-1.548-1.62h3.1A1.587,1.587,0,0,1,7,17.5Zm7-2.442H0v-.815l1.555-1.628V7.733a5.867,5.867,0,0,1,1.223-3.6A5.417,5.417,0,0,1,5.833,2.173V1.221a1.168,1.168,0,1,1,2.334,0v.952a5.418,5.418,0,0,1,3.055,1.964,5.867,5.867,0,0,1,1.223,3.6v4.883L14,14.244v.814ZM6.222,10.174V11.8H7.778V10.174H6.222Zm0-4.884V8.547H7.778V5.291H6.222Z" transform="translate(3 1.5)" fill="#9b9b9b"/></svg> Notifications</li>
        <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16"><rect id="Rectangle_570" data-name="Rectangle 570" width="16" height="16" fill="none"/><path id="Path_151" data-name="Path 151" d="M1.655,1.655v12.69H9.563V16H0V0H9.563V1.655ZM9.011,13.241,7.724,11.954l2.943-2.943h-6.8V7.172h6.989L7.724,4.23,9.011,2.943l4.966,4.966Z" transform="translate(2)" fill="#9b9b9b"/></svg> Se déconnecter</li>
    </ul>    
</nav>

<!-- Menu permanent -->
<nav class="menuPermanent">
  <ul class="passeDevant">
    <li class="collapse-menu blocNav">
      <div class="navJaune d-flex justify-content-center"><a href="?section=accueil" class="nav-link" id="register">Accueil</a></div>
    </li>
    <li class="collapse-menu blocNav">
      <div class="navBleu d-flex justify-content-center"><a href="?section=association" class="nav-link" id="association">A propos</a></div>
    </li>
    <li class="collapse-menu blocNav">
      <div class="navViolet d-flex justify-content-center"><a href="?section=contact" class="nav-link" id="contact">Contact</a></div>
    </li>
    <li class="collapse-menu blocNav">
      <div class="navJaune d-flex justify-content-center"><a href="?section=faq" class="nav-link" id="faq">FAQ</a></div>
    </li>
    <li id="iconPlus" class="navBlanc">
      <div id="croix" class="animationCroixFun">
        <div class="vertical"></div>
        <div class="horizontal"></div>
      </div>
    </li>
  </ul>
</nav>
