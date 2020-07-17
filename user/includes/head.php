<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>oostoora</title>
    <!-- bootstrap css File -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- fontawesome css File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />    
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
</head>

<body>
    <nav class="navbar mb-4">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./image/Groupe -5.png"></a>
            <div class="navbar-nav">

                <div class="nav-content d-flex">
                    <ul class="nav-items navbar-nav" style="margin-top: 2.3em;">
                        <li class="nav-item active">
                            <a class="nav-link" href="acceuil.php">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acceuil.php#act">Actualite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recrutement.php">Nous recrutons</a>
                        </li>
                    </ul>
                    <ul class="nav-items navbar-nav d-flex flex-column">
                        <li class="nav-item">
                            <div class="nav-auth">
                                <ul class="nav-items navbar-nav float-right">
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold" href="connexion_front.php">Se connecter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold" href="inscp1.html">S'inscrire</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="form-group has-search">
                                <form action="categories.php" method="GET">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" name="rech" class=" search-input form-control" placeholder="Recherche">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>