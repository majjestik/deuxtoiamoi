<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    </style>
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
            <ul class="navbar-nav mr-auto ml-lg-5">
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
                <a href="index.html" class="link-clean">
                    <img src="images/fr-sm.png" alt="Drapeau Français" 
                        width="30px" class="img-fluid flags" 
                        data-toggle="tooltip" data-placement="bottom" 
                        title="Français"
                    >
                </a>
                <span class="text-secondary"> | </span> 
                <a href="#" class="link-clean">
                    <img src="images/ma-sm.png" alt="Drapeau Malgache" 
                        width="30px" class="img-fluid flags"
                        data-toggle="tooltip" data-placement="bottom" 
                        title="Malagasy"
                    >
                </a>
            </div>  

            <ul class="navbar-nav ml-auto my-3  my-md-0 ml-md-0 mr-0 mr-md-2 mr-lg-5">
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


</body>
</html>