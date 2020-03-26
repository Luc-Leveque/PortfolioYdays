<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minimal Portfolio Theme">
    <meta name="keywords" content="responsive, retina ready, html5, css3, creative, portfolio, bootstrap theme, luc leveque" />
    <meta name="author" content="KingStudio.ro">

    <link rel="icon" href="images/favicon.png">
    <title>Portfolio - Luc Leveque</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/linear-icons.css">

</head>

<body>


<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>

<header>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?page=accueil">Luc Leveque - Étudiant</a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?page=Accueil"><span>Accueil</span></a></li>
                    <li><a href="index.php?page=Presentation"><span>Présentation</span></a></li>
                    <li><a href="index.php?page=Projets"><span>Projets</span></a></li>
                    <li><a href="index.php?page=Contact"><span>Contact</span></a></li>
                </ul>
            </div>

        </div>

    </nav>

    <div id="header-banner">
        <div class="banner-content single-page text-center">
            <div class="banner-info">
                <h1><?= $infos['hello_title_1'] ?></h1>
                <p><strong><?= $infos['hello_title_2'] ?></strong></p>
            </div>

        </div>
    </div>

</header>