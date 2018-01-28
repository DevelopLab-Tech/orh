<?php
/**
 * Created by PhpStorm.
 * User: inno-kirito
 * Date: 13/01/2018
 * Time: 19:04
 */
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Orh 2018</title>
</head>

<body>
<!--Bar de connexion-->
<?php
include 'inc/barConnexionCandidat.php';
?>

<div class=" container bg-light mt-5">
    <header id="logoOrh" class="py-3">
        <a href="index.php">
            <img src="img/logo_ORH.png" alt="logo_Orh" height="120">
        </a>
    </header>
    <!--NavBAr-->
    <?php
    include 'inc/navbar.php'
    ?>

    <div class="corp">
        <!--******************************************************DEPOSER VOTRE CV****************************-->
        <div class="row">
            <div class="col-md-4">
                <div class="nav flex-column nav-pills my-3 bg-light" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-user-circle-o"></i> Mes Infos</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-file-pdf-o"></i> Envoyer Mon <strong>CV</strong></a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"> <i class="fa fa-building-o"></i> Souscription</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-gears"></i> Parametres</a>
                </div>
                <div class="card">
                    <h4 class="card-header">Votre photo</h4>
                    <div class="card-body justify-content-center">
                        <img src="img/avatar.png" class="card-img img-fluid" alt="photo">
                    </div>
                </div>
                <?php
                include "inc/formation.php";
                include "inc/offres_emploi.php";
                ?>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><div class="container bg-light mb-5">
                            <h3 class="py-2">Mes Informations </h3>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Informations du Compte</h4>
                                </div>
                                <div class="card-body">
                                    <form action="php/inscriptionCandidat.php" method="post" enctype="multipart/form-data">

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="competence">Envoyer une photo </label>
                                                    <input type="file" name="photo" class="form-control-file form-control-sm">
                                                </div>
                                            </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="civilite">Civilite</label>
                                                <select name="civilite" class="form-control form-control-sm" id="civilite" required>
                                                    <option selected value="Monsieur">Monsieur</option>
                                                    <option  value="Madame">Madame</option>
                                                    <option  value="Mademoiselle">Mademoiselle</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nom">Nom</label>
                                                <input type="text" class="form-control form-control-sm" id="nom" name="nom" placeholder="Nom" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="prenom">Prenom</label>
                                                <input type="text" class="form-control form-control-sm" id="prenom" name="prenom" placeholder="Prenom" required>
                                            </div>
                                        </div>
                                        <div class="form-row">

                                        </div>

                                        <h6 class="card-header mb-2">Information Personnelles</h6>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="datenaiss">Date de naissance</label>
                                                <input type="date" class="form-control form-control-sm" id="datenaiss" name="datenaiss" placeholder="date" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nationalite">Nationalité</label>
                                                <select name="nationalite" class="form-control form-control-sm" id="nationalite" required>
                                                    <option selected value="ci">Cote d'ivoire/Ivoirienne</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="pays">Pays de Résidence</label>
                                                <select name="pays" class="form-control form-control-sm" id="pays" required>
                                                    <option selected value="civ">Cote d'ivoire</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ville">Ville de Résidence</label>
                                                <select name="ville" class="form-control form-control-sm" id="ville" required>
                                                    <option selected value="abidjan">Abidjan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tel">Numero de Telephone</label>
                                                <input type="tel" class="form-control form-control-sm" id="tel" name="tel" placeholder="07080910" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="autretel">Autre Contact</label>
                                                <input type="tel" class="form-control form-control-sm" id="autretel" name="autretel" placeholder="002250808">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="sitprofe">Situation Professionnelle </label>
                                                <select name="sitprofe" class="form-control form-control-sm" id="sitprofe" required>
                                                    <option selected value="">Sans emploi</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exp">Année d'expérience</label>
                                                <select name="exp" class="form-control form-control-sm" id="exp" required>
                                                    <option selected value="">Moins 1an</option>
                                                    <option selected value="">1an(s)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="competence">Votre domaine de compétence </label>
                                                <select name="competence" class="form-control form-control-sm" id="competence" required>
                                                    <option selected value="">Informatique</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="contrat">Contrats Souhaités </label>
                                                <select name="contrat" class="form-control form-control-sm" id="contrat" required>
                                                    <option selected value="cdd">CDD</option>
                                                    <option selected value="cdi">CDI</option>
                                                    <option selected value="stage">Stage</option>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-outline-primary ">
                                        <input type="reset" class="btn btn-outline-danger ">


                                    </form>
                                </div>
                                <div class="card-footer">
                                    Merci et restez connecter sur orh...
                                </div>
                            </div>
                        </div></div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <form action="php/envoyerCV.php">
                            <div class="form-group">
                                <div class="form-row">
                                    <label class="control-label" for="pdf">Sélectionnez Un fichier pdf</label>
                                    <input type="file" accept="application/pdf" class="form-control" required id="pdf" name="pdf">
                                    <input type="submit" value="Envoyer CV PDF" class="btn btn-outline-success my-3">
                                </div>
                            </div>
                        </form>

                        <form action="php/envoyerCV.php">
                            <div class="form-group">
                                <div class="form-row">
                                    <label class="control-label" for="video">Sélectionnez Une Video</label>
                                    <input type="file" accept="video/*" class="form-control" required id="video" name="video">
                                    <input type="submit" value="Envoyer Video" class="btn btn-outline-success my-3">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> Les souscriptions
                        <div class="card mt-5">
                            <h3 class="card-header">
                                Liste de nos services ORH
                            </h3>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">Service 1
                                        <div class="justify-content-end">
                                            <form action="php/souscriptionCandidat.php" method="post" enctype="multipart/form-data">
                                                <input class="btn btn-outline-success" type="submit" value="Souscrire">
                                            </form>

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><div class="card">
                            <div class="card-header">
                                <h4>Modifier mes parametres</h4>
                            </div>
                            <div class="card-body">
                                <form action="php/inscriptionCandidat.php" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="mdp">Ancien Mot de Passe</label>
                                            <input type="password" class="form-control form-control-sm" id="mdp" placeholder="Mot de passe" required name="mdp">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mdpNew">Nouveau Mot de Passe</label>
                                            <input type="password" class="form-control form-control-sm" id="mdpNew" placeholder="Mot de passe" required name="mdpNew">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mdpverif">Confirmation du mot de passe</label>
                                            <input type="password" class="form-control form-control-sm" id="mdpverif" placeholder="Confirmer le mot de passe" required name="mdpverif">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-outline-primary ">
                                    <input type="reset" class="btn btn-outline-danger ">


                                </form>
                            </div>
                            <div class="card-footer">
                                Merci et restez connecter sur orh...
                            </div>
                        </div></div>
                </div>



            </div>
        </div>

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
                        <a href="#" class="btn btn-warning">
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
                            <p>Où trouver le bureau de la Mine d'ORH</p>
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
</body>

</html>
