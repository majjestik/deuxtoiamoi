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

    <style type="text/css">
        .dropdown-item:hover {
            background-color: #f63272;
            color: #fff;
        }
        .dropdown-item {
            text-transform: uppercase;
            font-size: 14px;
        }
        .navbar-brand {
            width: 250px;
        }
        .glyphicon-lock, .glyphicon-envelope {
            position: relative;
            top: -28px;
            left: 92%;
            cursor: pointer;
        }
        form {
            background-color: #efefef;
        }
    </style>

    <title>Se connecter - Deuxtoiamoi</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark navbgcolor sticky-top amarante">
        
        <!-- LOGO SECTION -->
        <a href="#" class="">
            <img src="images/logo.png" class="img-fluid navbar-brand" id="logo" alt="logo">
        </a>
        
        <!-- COLLAPSE BUTTON -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- COLLAPSE SECTION -->
        <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-tit">
                    <a class="nav-link" href="index.php" style="color: #f63272;">ACCEUIL</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-tit" style="color: #f63272;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        A PROPOS DE NOUS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Qui Sommes Nous?</a>
                        <a class="dropdown-item" href="#">Contacts</a>
                        <a class="dropdown-item" href="#">remerciements</a>
                    </div>
                </li>
                <li class="nav-item ml-lg-3 nav-tit">
                    <a class="nav-link" href="#" style="color: #f63272;">BLOG</a>
                </li>
            </ul>

            <div class="col-md-2 col-5 mr-0">
                <a href="index.php" class="link-clean">
                    <img src="images/fr-sm.png" alt="Drapeau Français" width="30px" class="img-fluid flags">
                </a>
                <span class="text-secondary"> | </span> 
                <a href="#" class="link-clean">
                    <img src="images/uk-sm.png" alt="Drapeau Malgache" width="30px" class="img-fluid flags">
                </a>
            </div>  

            <ul class="navbar-nav ml-auto my-3  my-md-0">
                <li class="nav-item mb-2 mb-md-0">
                    <a href="signup.php" class=" link-clean">
                        <button class="btn btn-danger">S'inscrire</button>
                    </a>
                </li>
                <li class="nav-item ml-md-3 mr-1 mb-2 mb-md-0">
                    <a href="login.php" class=" link-clean">
                        <button class="btn btn-outline-light">Se connecter</button>
                    </a>
                </li>
            </ul>
        </div>

    </nav>



        <!-- MAIN CONTENT -->

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="fr_login.php" method="post" class="amarante mb-5 mt-2 p-md-5 p-4" id="createLandlordForm">
                    <marquee behavior="" direction="left" class="mb-3 text-danger aclonica">Veuillez saisir votre Email !</marquee>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control"
                         placeholder="Entrez votre adresse e-mail"
                        >
                        <span class="glyphicon glyphicon-envelope"></span>
                    </div>

                    <br>
                    
                    <button class="btn btn-dark btn-block nasalization" type="submit" name="submit">
                        <span class="glyphicon glyphicon-send"></span> ENVOYER
                    </button>
                    
                </form>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>



    <!-- JS Scripts -->
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/style.js"></script>
</body>
</html>