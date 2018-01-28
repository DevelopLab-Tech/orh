<?php
/**
 * Created by PhpStorm.
 * User: inno-kirito
 * Date: 13/01/2018
 * Time: 19:04
 */
include 'php/connexionBD.php';
?>


<!doctype html>
<html lang="fr">
<!---@ Innocent Kacou-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap Css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/windows10_icon.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Orh 2018</title>
    <!--Script-->

</head>

<body>
<?php
include 'inc/barConnexion.php'
?>

<div class=" container bg-light mt-5">
    <header id="logoOrh" class="py-3">
        <a href="index.php">
            <img src="img/logo_ORH2018.png" alt="logo_Orh" height="120">
        </a>
    </header>

    <!--Carousel-->
    <div class="row">
        <?php
        include 'inc/carrousel.php';
        ?>
    </div>
    <!--NavBAr-->
    <?php
    include 'inc/navbar.php'
    ?>

    <div class="corp">
        <h2 class="text-center" id=heading_body>Actualité</h2>
        <nav class="navbar navbar-expand">

            <ul class="nav navbar-nav justify-content-center" id="navActu">
                <li>
                    <a href="index.php">L'actualité </a>
                </li>
                <li>|</li>
                <li>
                    <a href="index.php">Formation </a>
                </li>
                <li>|</li>
                <li>
                    <a href="index.php">Conseil RH </a>
                </li>
                <li>|</li>
                <li>
                    <a href="index.php">Solutions Digitals </a>
                </li>
                <li>|</li>
                <li>
                    <a href="index.php">Coaching </a>
                </li>
            </ul>

        </nav>
        <div class="row">
            <h4 class=" col col-lg-8 " id="heading_mine">ORH CONSEIL EN STRATEGIE RH</h4>
        </div>
        <div class="row">
            <div class="col-lg-9 my-3 bg-white col-12">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3" src="img/logo_ORH.png" width="200" alt="imageActualite">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Actualite 1</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                    <li class="media my-4">
                        <img class="mr-3" src="img/logo_ORH.png" width="200" alt="imageActualite">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Actualite 2</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="img/logo_ORH.png" width="200" alt="imageActualite">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Actualite 3</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 ">
                <?php
                include 'inc/offres_emploi.php';
                ?>
            </div>

        </div>
        <div class="row bande_bleu justify-content-center my-2">
            <h4 class=" text-white">LES PRODUITS D'ORH</h4>
        </div>
        <div class="row">
            <section class=" sec_produiOrh py-4">
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="textbtn text-center">
                            <a href="orh_entreprise.php">
                                <button class="btn btn-info btn-lg btn-lg-info">
                                    <span class="icons8-group icons8_body"></span>
                                </button>
                            </a>
                            <br>
                            <a class="text-center lien" href="orh_entreprise.php">Strategie RH</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="textbtn text-center">
                            <a href="orh_entreprise.php">
                                <button class="btn btn-info btn-lg btn-lg-info">
                                    <span class="icons8-support icons8_body"></span>
                                </button>
                            </a>
                            <br>
                            <a class="text-center lien" href="orh_entreprise.php">Outils de gestion des RH</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="textbtn text-center">
                            <a href="orh_entreprise.php">
                                <button class="btn btn-info btn-lg btn-lg-info">
                                    <span class="icons8-organization icons8_body"></span>
                                </button>
                            </a>
                            <br>
                            <a class="text-center lien" href="orh_entreprise.php">Audit Social</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="textbtn text-center">
                            <a href="orh_entreprise.php">
                                <button class="btn btn-info btn-lg btn-lg-info">
                                    <span class="icons8-briefcase icons8_body"></span>
                                </button>
                            </a>
                            <br>
                            <a class="text-center lien" href="orh_entreprise.php">Recrutement</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="textbtn text-center">
                            <a href="orh_candidat.php">
                                <button class="btn btn-info btn-lg btn-lg-info">
                                    <span class="icons8-opened-folder icons8_body"></span>
                                </button>
                            </a>
                            <br>
                            <a class="text-center lien" href="orh_candidat.php">Dossier de Candidature</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="textbtn text-center">
                            <a href="orh_candidat.php">
                                <button class="btn btn-info btn-lg btn-lg-info">
                                    <span class="icons8-student icons8_body"></span>
                                </button>
                            </a>
                            <br>
                            <a class="text-center lien" href="orh_candidat.php">Formation</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <br>

        <div class="row bande_bleu justify-content-center my-2">
            <h4 class=" text-white"> LE GUIDE D'ORH</h4>
        </div>
        <br>

        <!--Card-->
        <div class="row guide_orh text-center py-3">
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="img/help_hand.png">
                    <div class="card-body">
                        <h4 class="card-title text-center">ORH a vos coté</h4>
                        <div class="card-text">
                            Pour tous vos avis et informations, ORH est à votre écoute.
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="orh_entreprise.php" class="btn btn-warning">
                            <span>Connecter vous</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Aide en ligne</h4>
                        <div class="card-text">
                            <p>Que faut-il dire ou ne pas dire lors d'un entretien téléphonique ?</p>
                            <p>Où trouver le bureau d'ORH</p>
                        </div>
                    </div>
                    <div class="card-footer text-center">

                    </div>
                    <img class="card-img-top" src="img/support.png">
                </div>
            </div>
            <!----formation----->
            <div class="col-sm-12 col-md-4 col-lg-4 mt-4 col-12">
                <?php
                include 'inc/formation.php'
                ?>
            </div>

        </div>


        <!-----bande et service pieds de page----->
        <br>
        <div class="row bande_bleu justify-content-center my-2">
            <h4 class=" text-white"> Tout les services ORH</h4>
        </div>
        <!--------------------------Services Orh-------------------->
        <div class="row">
            <?php
            include 'inc/services_orh.php'
            ?>
        </div>
        <div class="row bande_bleu justify-content-center my-2">
            <h4 class=" text-white"> encore plus de orh...</h4>
        </div>

        <!-----------------------footer------------------------------->
        <div class="row">
            <?php
            include 'inc/footer.php'
            ?>
        </div>
        <!--------------------body-----------------fin---------->
    </div>
</div>



<!---***********Script*****************-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
