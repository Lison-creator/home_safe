<div class="container-fluid">
    <div class="titrePseudo">
        <h3 class="ombrageText editerTitre"><?= $_SESSION['pseudo']; ?> / Modifier mon profil</h3> <!-- Est-ce qu'on garde le nom? Ou on mets le pseudo? -->
    </div>
    <div class="formulaireEditerProfil">
        <div class="row">
            <div class="col-3">
                <!-- Espace vide pour le menu -->
            </div>
            <div class="col-9 p-3">
                <form action="#" method="post">
                    <div class="row align-items-center justify-content-evenly">
                        <div class="ajoutImageEdit d-flex justify-content-end align-items-end">
                            <img src="public/images/uploads/<?php $_POST["image"] ?>">
                            <div class="iconPhoto d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 22.5 20.25">
                                    <g id="Group_1596" data-name="Group 1596" transform="translate(0 -1)">
                                        <path id="Path_110" data-name="Path 110" d="M11.25,13.5a2.766,2.766,0,0,0,2.813-2.7,2.815,2.815,0,0,0-5.625,0A2.766,2.766,0,0,0,11.25,13.5Zm0-8.1a5.532,5.532,0,0,1,5.625,5.4,5.532,5.532,0,0,1-5.625,5.4,5.532,5.532,0,0,1-5.625-5.4A5.532,5.532,0,0,1,11.25,5.4Zm8.438,14.85H2.813a2.834,2.834,0,0,1-1.969-.81A2.614,2.614,0,0,1,0,17.55V5.4A2.766,2.766,0,0,1,2.813,2.7h2.25L7.172.675A2.377,2.377,0,0,1,8.859,0h4.922a2.3,2.3,0,0,1,1.547.675L17.438,2.7h2.25A2.766,2.766,0,0,1,22.5,5.4V17.55A2.766,2.766,0,0,1,19.688,20.25Z" transform="translate(0 1)" fill="#3f50a7" fill-rule="evenodd" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <label for="editerImage" class="btnJaune btnChangerAvatar">Changer d'avatar</label>
                        <input type="file" name="editerImage" id="editerImage" hidden>
                        <label for="supprimerImage" class="btnViolet btnSupprimerAvatar">Supprimer</label>
                    </div>
                    <label for="pseudo" class="editerPseudo">Pseudo</label><br>
                    <input type="text" name="pseudo" id="pseudoEdit" value="<?= $_SESSION['pseudo']; ?>"><br>
                    <div class="row editCP">
                        <label for="ad_cp" class="editerCP mt-4 col-8">Ton code postal</label>
                        <div class="infoCP col-4 mt-4">Cliquer sur la liste déroulante pour voir<br>les différentes communes sur Bruxelles.</div>
                    </div>
                    <select name="ad_cp" id="ad_cp" class="zipCodes">
                        <option value="1000">1000 Bruxelles</option>
                        <option value="1020">1020 Laeken</option>
                        <option value="1030">1030 Schaerbeek</option>
                        <option value="1040">1040 Etterbeek</option>
                        <option value="1050">1050 Ixelles</option>
                        <option value="1060">1060 Saint-Gilles</option>
                        <option value="1070">1070 Anderlecht</option>
                        <option value="1080">1080 Molenbeek-Saint-Jean</option>
                    </select>
                    <div class="row editBio">
                        <label for="bio" class="editerBio mt-4 col-10">Bio</label>
                        <div class="infoBio col-2 mt-4">1500 caractères max</div>
                    </div>
                    <textarea name="bio" id="bio" class="editerTextBio"></textarea>
                    <div class="row m-auto">
                        <div class="col-12 text-center mt-5 mb-3">
                            <input type="submit" value="Sauvegarder" class="btnJaune btnSauvegarder">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>