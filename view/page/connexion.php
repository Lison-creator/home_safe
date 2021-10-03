<!-- <link rel="stylesheet" href="styleConnection.css"> -->
<!-- Faut-il le relier ici aussi où uniquement dans le head.php ? -->

<section class="container-flex">
    <!-- Un formulaire html complet pour la connection -->
    <div class="row">
        <div class="col-5 offset-1 formulaireConnection">
            <h2 class="text-uppercase mb-2 mt-5 text-center">Home Safe</h2>
            <h3 class="text-center">Rejoins Home Safe et ta communauté pour des trajets sécures dans Bruxelles</h3>

            <div class="container-flex fondFormulaire">
                <div class="row">
                    <a href="" class="col text-center mt-3">Se connecter</a>
                    <a href="" class="col text-center mt-3">S'inscrire</a>
                </div>
                <form action="#" method="post" class="text-center">

                    <label for="nom" id="labelConnectionPrenom">Prénom</label><br> <!-- TODO modifier le name et le for dans php et le routeur pour prénom -->
                    <input type="text" name="nom" id="nom"><br>

                    <label for="emailConnection" id="labelConnectionEmail">E-mail</label><br>
                    <input type="mail" name="emailConnection" id="emailConnection"><br>

                    <label for="motDePasseConnection" id="labelConnectionMdp">Mot de passe</label><br>
                    <input type="password" name="motDePasseConnection" id="motDePasseConnection"><br>

                    <div class="text-center">
                        <input type="submit" value="Se connecter" class="btnJaune btnConnection">
                    </div>
                </form>
            </div>
            <?= $msgError; ?>
        </div>

    </div>
</section>