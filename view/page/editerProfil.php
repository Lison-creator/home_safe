<div class="container-fluid">
    <h3 class="ombrageText"><?= $_SESSION['nom']; ?> / Modifier mon profil</h3> <!-- Est-ce qu'on garde le nom? Ou on mets le pseudo? -->
    <div class="formulaireEditerProfil">
        <div class="row">
            <div class="col-3"><!-- Espace vide pour le menu --></div> 
            <div class="col-9">
                <form action="#" method="get">
                    <label for="prenom" class="editerPrenom">Prénom</label><br>
                    <input type="text" name="prenom" id="prenom"><br>
                    <label for="ad_cp" class="editerCP">Ton code postal</label><br>
                    <select name="ad_cp" id="ad_cp" class="zipCodes">
                        <option value="1000">1000 Bruxelles</option>
                        <option value="1000">1020 Laeken</option>
                        <option value="1000">1030 Schaerbeek</option>
                        <option value="1000">1040 Etterbeek</option>
                        <option value="1000">1050 Ixelles</option>
                        <option value="1000">1060 Saint-Gilles</option>
                        <option value="1000">1070 Anderlecht</option>
                    </select><br>
                    <label for="bio" class="editerBio">Bio</label><br>
                    <textarea name="bio" id="bio" cols="100" rows="8" style="resize:none"></textarea>

                    <div class="row m-auto">
                        <div class="col-12 text-center mt-5 mb-3">
                            <input type="submit" value="Sauvegarder" class="btnJaune ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>