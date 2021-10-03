<!-- <link rel="stylesheet" href="styleConnection.css"> -->
<!-- Faut-il le relier ici aussi où uniquement dans le head.php ? -->

<section class="container-flex">
    <!-- Un formulaire html complet pour la connection -->
    <div class="row"><!-- Couper la page en 2 / formualaire et titre à gauche et Logo à droite -->
        <div class="col-5 offset-1 formulaireConnection"> <!-- Ne prend pas toute la page car l'autre col c'est pour le logo -->
            <h2 class="text-uppercase mb-2 mt-5 text-center">Home Safe</h2>
            <h3 class="text-center">Rejoins Home Safe et ta communauté pour des trajets sécures dans Bruxelles !</h3>

            <div class="fondFormulaire">
                <div class="row mt-3">
                    <div class="col-6 text-center mb-5"><!--TODO avec du js: hover de toute la div, changement de couleur pour le a et pour la div - couleurs inversées -->
                        <a href="">Se connecter</a>
                        <div class="soulignement d-flex justify-content-center"><!-- Contient un background-color et une width special pour faire un soulignement --></div>
                    </div>
                    <div class="col-6 text-center mb-5">
                        <a href="">S'inscrire</a>
                        <div class="soulignement d-flex justify-content-center"><!-- Contient un background-color et une width special pour faire un soulignement --></div>                      
                    </div>
                </div>
                <div class="row">
                    <form action="#" method="post" class="col-11 offset-1"> <!-- TODO changer ici car il faut qu tout soit centrer sauf les labels -->

                        <label for="nom" id="labelConnectionPrenom">Prénom</label><br> <!-- TODO modifier le name et le for dans php et le routeur pour prénom -->
                        <input type="text" name="nom" id="nom" class="justify-content-center"><br>

                        <label for="emailConnection" id="labelConnectionEmail">E-mail</label><br>
                        <input type="mail" name="emailConnection" id="emailConnection" class="justify-content-center"><br>

                        <label for="motDePasseConnection" id="labelConnectionMdp">Mot de passe</label><br>
                        <input type="password" name="motDePasseConnection" id="motDePasseConnection" class="justify-content-center"><br>

                        <div class="text-center">
                            <input type="submit" value="S'inscrire" class="btnJaune btnConnection"> <!-- TODO vérifier le centrage de mon bouton -->
                        </div>
                    </form>
                </div>
            </div>
            <?= $msgErreurInscription; ?>
        </div>
        <div class="col-6"> <!-- Deuxième col qui prend l'autre moitié de la page pour le logo qui doit être centrer -->
<!-- TODO rajouter ici le logo -->
        </div>

    </div>
</section>