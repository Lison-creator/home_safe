<!-- <link rel="stylesheet" href="styleConnection.css"> -->
<!-- Faut-il le relier ici aussi où uniquement dans le head.php ? -->

<section class="imageDeFond">

    <!-- Un formulaire html complet pour la connection -->

    <div class="row">
        <!-- début de la row générale -->
        <!-- composée de 2 colls -->

        <!-- Couper la page en 2 / formulaire et titre à gauche et Logo à droite -->
        <div class="col-4 offset-2 ">
            <!-- Ne prend pas toute la page car l'autre col c'est pour le logo -->

            <h2 class="mb-2 mt-5 text-center ombrageText">Salut ! Créons ton profil</h2>
            <h3 class="text-center mb-5 ombrageText">Présente toi rapidement !<br>Tu pourras changer ton profil plus tard.</h3>

            <div class="formulaireAvatar"><!-- Block noir ici -->
                <div class="row">
                    <!-- TODO renvoyer au fichier importerImage -->
                    <form action="#" method="post" class="col-11 offset-1" enctype="multipart/form-data">
                        <!-- enctype="multipart/form-data". It specifies which content-type to use when submitting the form  -->

                        <label for="importerImage" class="ajoutAvatar col-12 mb-4 mt-4">Ajoute ton Avatar</label>
                        <div class="row align-items-center">
                            <!-- l'id de mon input doit être lié au for de mon label > pour pouvoir le récupérer en JS -->
                            <div class="col-6">
                                <label for="btnImporterImage" class="importerImage d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.5" height="20.25" viewBox="0 0 22.5 20.25">
                                        <g id="Group_1596" data-name="Group 1596" transform="translate(0 -1)">
                                            <path id="Path_110" data-name="Path 110" d="M11.25,13.5a2.766,2.766,0,0,0,2.813-2.7,2.815,2.815,0,0,0-5.625,0A2.766,2.766,0,0,0,11.25,13.5Zm0-8.1a5.532,5.532,0,0,1,5.625,5.4,5.532,5.532,0,0,1-5.625,5.4,5.532,5.532,0,0,1-5.625-5.4A5.532,5.532,0,0,1,11.25,5.4Zm8.438,14.85H2.813a2.834,2.834,0,0,1-1.969-.81A2.614,2.614,0,0,1,0,17.55V5.4A2.766,2.766,0,0,1,2.813,2.7h2.25L7.172.675A2.377,2.377,0,0,1,8.859,0h4.922a2.3,2.3,0,0,1,1.547.675L17.438,2.7h2.25A2.766,2.766,0,0,1,22.5,5.4V17.55A2.766,2.766,0,0,1,19.688,20.25Z" transform="translate(0 1)" fill="#3f50a7" fill-rule="evenodd" />
                                        </g>
                                    </svg>

                                </label>
                            </div>
                            <div class="col-6">
                                <input type="file" name="importerImage" id="btnImporterImage" hidden>
                                <div id="imageChoisie">Aucune image importée</div>
                            </div>
                        </div>

                        <label for="ad_cp" id="labelZip" class="mb-1 mt-4 ajoutZip col-12">Choisis ton zip code</label><br> <!-- TODO rajouter tous les codes Bruxelles / à lier avec la DB ?-->
                        <select name="ad_cp" id="ad_cp" class="zipCodes">
                            <option value="">--Choisis ton zip code sur Bruxelles--</option>
                            <option value="1000">--1000 Bruxelles--</option>
                            <option value="1020">--1020 Laeken --</option>
                            <option value="1030">--1030 Schaerbeek--</option>
                            <option value="1040">--1040 Etterbeek--</option>
                            <option value="1050">--1050 Ixelles--</option>
                            <option value="1060">--1060 Saint-Gilles--</option>
                            <option value="1070">--1070 Anderlecht--</option>
                            <option value="1080">--1080 Molenbeek-Saint-Jean--</option>
                            <option value="1090">--1090 Jette--</option>
                        </select>

                        <div class="row m-auto">
                            <div class="col-12 text-center mt-5 mb-3">
                                <input type="submit" name="selection" value="Suivant" class="btnJaune ">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- Fin de mon formulaire -->
        </div><!-- fin de la première div.formulaireAvatar de 6 complètement à gauche -->

        <div class="col-6">
            <!-- début de la deuxième div complètement à droite avec le svg -->
            <!-- Deuxième col qui prend l'autre moitié de la page pour le logo qui doit être centré -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 logoConnection d-flex align-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 378.402">
                            <g id="Logo_noir" data-name="Logo noir" opacity="1">
                                <!-- TODO vérifier que l'opacité est toujours à 1 aussi chez les filles -->
                                <g id="Groupe_350" data-name="Groupe 350">
                                    <path id="Tracé_281" data-name="Tracé 281" d="M423.915,17.8C358.423,19.5,305.193,76.708,304,146.635c-.59,34.73,37.509,98.011,39.854,102.349l23.854,44.107,12.051,22.284c7.674-3.4,15.476-6.489,23.207-9.683,15.186-6.273,34.238-12.943,45.292-26.044a14.79,14.79,0,0,0,3.251-6.64c3.063-15.588-16.284-20.439-26.412-22.146a398.822,398.822,0,0,1-57.587-13.929c-12.966-4.235-32.673-12.04-31.327-30.227a23.471,23.471,0,0,1,3.34-10.274c8.28-13.828,21.465-34.593,22.236-35.531A164.307,164.307,0,0,0,371.834,147H357.748a7.959,7.959,0,0,1-7.664-8.183V97.294h-7.731a5.167,5.167,0,0,1-4.078-8.56l17.768-19.94,21.315-23.922a5.506,5.506,0,0,1,8.155,0l21.315,23.922,17.766,19.94a5.167,5.167,0,0,1-4.078,8.56h-7.729v41.524A7.96,7.96,0,0,1,405.123,147H384.171c-15.336,21.516-32.858,51.266-32.974,58.078a13.067,13.067,0,0,0,3.617,9c4.388,4.727,10.225,6.655,15.984,8.377,16.372,4.892,77.211,14.087,89.327,20.549,8.435,4.5,16.442,14.031,10.944,24.415a34.884,34.884,0,0,1-7.053,8.527c-22.668,21.82-47.692,41.807-72.821,60.567l30.488,56.373a5.942,5.942,0,0,0,10.615,0l53.97-99.8,23.84-44.08c2.379-4.4,39.888-66.229,39.888-99.936C550,75.458,493.256,15.99,423.915,17.8Zm42.271,36.769a3.539,3.539,0,0,0-.128.867,13.621,13.621,0,0,1-3.459,7.6q-9.5,10.311-19.053,20.563c-.137.148-.2.146-.34,0q-8.175-8.877-16.355-17.746c-.575-.625-1.11-1.3-1.727-1.87a13.959,13.959,0,0,1-4.429-8.539,4.877,4.877,0,0,0-.131-.918V52.379a1.161,1.161,0,0,0,.083-.5,13.811,13.811,0,0,1,4.124-8.641,11.263,11.263,0,0,1,6.295-3.152,4.472,4.472,0,0,0,.9-.134h.186a1.687,1.687,0,0,0,.885,0h.14c.025.059.076.045.121.048a9.528,9.528,0,0,1,4.1,1.271,14.58,14.58,0,0,1,5.84,6.483c.042.083.06.185.153.248.046-.091.085-.17.124-.25a15.5,15.5,0,0,1,3.7-4.956,10.883,10.883,0,0,1,5.544-2.724,3.219,3.219,0,0,0,.767-.119h.046a2.435,2.435,0,0,0,1.071,0h.139c.04.078.11.046.167.049a10.387,10.387,0,0,1,4.11,1.158,13.268,13.268,0,0,1,7,10.325,5.867,5.867,0,0,0,.131.942Z" transform="translate(-303.997 -17.757)" fill="#fac815" />
                                </g>
                                <text id="HOME_SAFE" data-name="HOME SAFE" transform="translate(229.361 131.194)" fill="#282828" font-size="30" font-family="Cocogoose">
                                    <tspan x="-98.67" y="0">HOME</tspan>
                                    <tspan x="-82.35" y="30">SAFE</tspan>
                                </text>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div><!-- fin de la deuxième div qui contient le svg complètement à droite -->

    </div><!-- fin de la row générale -->

</section>
<script src="public/js/script-inscriptionProfile.js"></script>
