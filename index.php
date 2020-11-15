<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS links: custom and bootstrap -->
    <link rel="stylesheet" href="css/mainStyle.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/glyphs.css">
    <link rel="stylesheet" href="css/aos.css">

    <title>Acceuil - Deuxtoiamoi</title>

    <style type="text/css">

        .witnesses-tab {
            display: flex;
            width: 50%;
            flex-wrap: wrap;
            margin: 0 auto;
        }
        
        @media screen and (max-width: 600px) {
            h1, h2 {
                font-size: 20px;
            }
        }

        @media screen and (min-width: 601px) and (max-width: 767px) {
            h1, h2 {
                font-size: 25px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1024px) {
            h1, h2 {
                font-size: 25px;
            }
        }
    </style>

</head>
<body>

    <?php include_once('navbar.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <!-- COVER IMAGE on background url() not displayed on small devices-->
            <div class="col-md-12 d-md-block" id="cover_img" class="img-fluid">
                <div class="welcome">
                    <img src="images/france.png" alt="Bienvenue" 
                        class="img-fluid welcome-img" 
                        data-aos="fade-up"
                        data-aos-duration="3000"
                    >
                </div>
            </div>
        </div>
    </div>

    <!-- ZONE DES CARTES -->

    <div class="container-fluid" id="offres-card">
        <div class="row my-4 mx-sm-5 mx-lg-5 mx-1">
        
            <div class="col-md-12">
                <h1 class="text-center my-5">CE QU'ON VOUS PROPOSE</h1>
            </div>

            <div class="col-lg-4 col-md-6 col-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 d-flex d-flex-row d-flex d-flex-row">
                            <img class="img-fluid rounded-icons"
                                 src="images/arrowed-heart.png" 
                                 alt="deux coeurs flèchés"
                            >
                            <h5 class="card-title">Rencontres de Rêves</h5>
                        </div>
                        <p class="card-text text-justify">
                            Vous êtes <b>célibataire désirant de franchir le pas du site de rencontre, faire de vraies rencontres,
                            trouver votre âme soeur, trouver de nouveaux amis avec qui vous pourrez partager de beaux moments inoubliables?</b>
                            <b>Deuxtoiamoi.com</b> est le nouveau site de rencontre qui t'accompagne dans cette belle aventure.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 d-flex d-flex-row">
                            <img class="img-fluid rounded-icons" src="images/black-folder-lock.svg" alt="deux coeurs flèchés">
                            <h5 class="card-title">Comfort & Sécurité</h5>
                        </div>
                        <p class="card-text text-justify">
                            Avec un système proactif conçu rien que pour vous, <b>Deuxtoiamoi.com</b> vous propose des 
                            membres ayant des intérêts et passions communes avec vous. <b>Chaque profil est controlé manuellement 
                            pour assurer votre confort au sein du site et aussi pour vous assurer la qualité de vos rencontres</b> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 d-flex d-flex-row">
                            <img class="img-fluid rounded-icons" src="images/confidential-icon-2.png" alt="deux coeurs flèchés">
                            <h5 class="card-title">Confidentialité</h5>
                        </div>
                        <p class="card-text text-justify">
                            Que vous soyez timide ou pas, <b>vous tenez à votre intimité? Deuxtoiamoi.com</b> vous rassure que personne 
                            ne vous verra de l'extérieur. <b>Grace à vos filtres, seul les inscrits selon vos critères de choix</b>
                            pouront vous voir et vous contacter.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 d-flex d-flex-row">
                            <img class="img-fluid rounded-icons" src="images/chat-icon.png" alt="deux coeurs flèchés">
                            <h5 class="card-title">Messagerie Instantanée</h5>
                        </div>
                        <p class="card-text text-justify">
                            Nous avons pensé à tout le monde y compris aux personnes ayant un faible débit. <b>Deuxtoiamoi.com</b> assure la 
                            fluidité de la navigation ainsi que des heures de plaisir avec la messagerie instantanée qui 
                            permet d'échanger et de discuter en direct avec ceux dont vous le désirez. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 d-flex d-flex-row">
                            <img class="img-fluid rounded-icons" src="images/map-icon.png" alt="deux coeurs flèchés">
                            <h5 class="card-title">Ici et Ailleurs</h5>
                        </div>
                        <p class="card-text text-justify">
                            <b>Deuxtoiamoi.com</b> c'est aussi des milliers de rencontres par semaine pour nos célibataires. Que vous souhaitiez 
                            faire des rencontres à proximité ou ailleurs, le site vous permet de choisir et de vous afficher uniquement 
                            ce que vous recherchez.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 d-flex d-flex-row">
                            <img class="img-fluid rounded-icons" src="images/no-card-icon.png" alt="deux coeurs flèchés">
                            <h5 class="card-title">100% Gratuit à Vie</h5>
                        </div>
                        <p class="card-text text-justify">
                            <b>Doit-on payer pour être heureux toute une vie ?</b> Notre réponse est <b>NON. Deuxtoiamoi.com</b> s'engage a 
                            ce que toutes les fonctionnalités qu'offre le site soit gratuites. Jamais <b>Deuxtoiamoi.com</b> ne vous demandera 
                            votre carte de crédit pour quoi que ce soit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            
            <!-- BUTTON d'APPEL A ACTION -->
            <div class="col-md-10 my-md-5 offset-md-1">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-danger btn-lg" 
                        style="
                            border-radius: 50px; 
                            border-width: 2px;
                            font-weight: bold;
                        "
                    >
                        Inscrivez-vous !
                    </a>
                </div>
            </div>

        </div>
    </div>


    <!-- TEMOIGNAGES -->
    <div class="jumbotron jumbotron-fluid my-5">
        <div class="container">
            <h2 class="text-center text-capitalize">Ce que pensent nos utilisateurs</h2>
            <div class="my-5 witnesses-tab" id="witnesses">
                
            </div>
        </div>
    </div>

    <!-- BUTTON d'APPEL A ACTION -->
    <div class="container my-5">
        
        <div class="d-flex justify-content-center mt-4 mb-5">
            <a href="#" class="btn btn-outline-danger btn-lg" 
                    style="
                        border-radius: 50px; 
                        border-width: 2px;
                        font-weight: bold;
                    "
                >
                Rejoignez-nous dès maintenant !
            </a>
        </div>


    <!-- ARTICLES -->
    <h2 class="text-center my-5 text-uppercase">Quelques conseil et astuces</h2>   
    
    <div class="cards-div text-center">
        <a href="#" class="card" style="border: none;">
            <div>
                <div class="card-body">
                    <img src="images/âme soeur.jpeg"
                        alt="Deux amoureux se tenant la main" 
                        class="img-fluid photo-article"
                    >
                </div>
                <div class="card-footer">
                    <b>Comment reconnaitre l'âme soeur ?</b>
                </div>
            </div>
        </a>

        <a href="#" class="card" style="border: none;">
            <div>
                <div class="card-body">
                    <img src="images/shy 1.jpg"
                        alt="Une femme timide se cachant le visage avec une fleur" 
                        class="img-fluid photo-article"
                    >
                </div>
                <div class="card-footer">
                    <b>Comment vaincre sa timidité ?</b>
                </div>
            </div>
        </a>

        <a href="#" class="card" style="border: none;">
            <div>
                <div class="card-body">
                    <img src="images/broken man.jpg"
                        alt="Homme abattu assis au sol" 
                        class="img-fluid photo-article"
                    >
                </div>
                <div class="card-footer">
                    <b>Est-il possible d'aimer à nouveau ?</b>
                </div>
            </div>
        </a>
    </div>

    </div>

    <?php include_once('footer.php');  ?>


    <!-- JS Scripts -->
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/style.js"></script>
    <script>
        /* $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        }); */
    </script>
    <script src="js/aos.js"></script>
    <script type="text/javascript">
        AOS.init();
    </script>
</body>
</html>