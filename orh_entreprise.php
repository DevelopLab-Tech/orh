<?php
/**
 * Created by PhpStorm.
 * User: inno-kirito
 * Date: 13/01/2018
 * Time: 19:04
 */
include 'php/connexionBD.php';
$genre = $db->query("SELECT * FROM genre ORDER BY LIB_GENRE")->fetchAll(PDO::FETCH_ASSOC);
$pays = $db->query("SELECT * FROM pays ORDER BY LIB_PAYS")->fetchAll(PDO::FETCH_ASSOC);
$ville = $db->query("SELECT * FROM ville ORDER BY LIB_VILLE")->fetchAll(PDO::FETCH_ASSOC);
$type_soc = $db->query("SELECT * FROM type_societe ORDER BY LIB_TYPE_SOC")->fetchAll(PDO::FETCH_ASSOC);
$form_jur = $db->query("SELECT * FROM forme_juridique ORDER BY LIB_FORM_JUR")->fetchAll(PDO::FETCH_ASSOC);
$sect_act = $db->query("SELECT * FROM secteur_act ORDER BY LIB_SECT")->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="fr">
<!---@ Innocent Kacou-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap Css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/windows10_icon.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Orh 2018</title>
</head>

<body>
<!--Bar de connexion-->
<?php
include 'inc/barConnexion.php';
?>

<div class=" container bg-light mt-5">
    <header id="logoOrh" class="py-3">
        <a href="index.php">
            <img src="img/logo_ORH2018.png alt="logo_Orh" height="120">
        </a>
    </header>

    <!--Carousel-->
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/cr_espace_entreprise.jpg" alt="First slide">
                    <div class="carousel-caption d-md-block bgCarousel">
                        <h5 class="text-white">Espace Entreprise</h5>
                        <p class="text-white">Profiter pleinement des outils de ORH dans le cadre de votre recherche de candidat qualifié</p>
                        <a href="" class="btn btn-primary">Connecter vous a votre compte entreprise</a>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--NavBAr-->
    <?php
    include 'inc/navbar.php'
    ?>

    <div class="corp">

        <br>

        <!--Formulaire Inscription-->
        <div class="row">
            <div class="col-md-4">
                <div class="card border-light mb-3">
                    <div class="card-header bg-primary"><h5 class="text-white">Vous avez deja un compte entreprise
                            connectez-vous</h5></div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">Informations du Compte <strong class="text-primary">Entreprise</strong>
                        </h5>
                        <p class="card-text">Pour acceder a toutes les fonctionalités de notre site deposez vos annonces
                            et recruter des personnes</p>
                        <p class="card-text">Renseignez vos information</p>
                        <form method="post" enctype="multipart/form-data" action="php/connexionEntreprise.php">
                            <div class="form-group">
                                <label for="emailConnexionE">Email de connexion entreprise</label>
                                <input type="email" class="form-control" id="emailConnexionE" name="emailConexionE"
                                       placeholder="Entrer email entreprise">
                            </div>
                            <div class="form-group">
                                <label for="mdpConnexionE">Mot de Passe</label>
                                <input type="password" class="form-control" id="mdpConnexionE"
                                       placeholder="Mot de Passe">
                            </div>
                            <button type="submit" id="validerConnexionE" name="validerConnexionE"
                                    class="btn btn-warning btn-block text-white">Connexion
                            </button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-8 col-md-12">
                <div class="container bg-white mb-5">
                    <h3 class="py-2">Créer mon Compte <strong style="color:#2baae0">Entreprise</strong></h3>
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">Votre compte Entreprise</div>
                        <div class="card-body">
                            <p class="card-text">Pourquoi créer un compte <strong
                                        style="color:#2baae0">Entreprise</strong> ? <br>
                                Pour profiter pleinement des outils mis à votre disposition par <strong>ORH</strong>
                                dans le cadre de votre recherche de <strong>candidat qualifié</strong>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Informations de l'Entreprise</h4>
                        </div>
                        <div class="card-body">
                            <form action="php/inscriptionEntreprise.php" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sigle">Sigle</label>
                                        <input type="text" class="form-control form-control-sm" id="sigle" name="sigle"
                                               placeholder="Sigle">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="raison_sociale">Raison Sociale</label>
                                        <input type="text" class="form-control form-control-sm" id="raison_sociale"
                                               name="raison_sociale" placeholder="Raison Sociale" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tel">Telephone</label>
                                        <input type="tel" class="form-control form-control-sm" id="tel"
                                               placeholder="Ex:+22507072020" required name="tel">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fax">Fax</label>
                                        <input type="text" class="form-control form-control-sm" id="fax"
                                               placeholder="Votre Fax" required name="fax">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="site">Site internet</label>
                                        <input type="text" class="form-control form-control-sm" id="site"
                                               placeholder="Ex:www.orh.com" required name="site">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="adresspos">Adresse postale</label>
                                        <input type="text" class="form-control form-control-sm" id="adresspos"
                                               placeholder="Votre adresse postale" required name="adresspos">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="commerce">Registre  De Commerce</label>
                                        <input type="text" class="form-control form-control-sm" name="commerce" id="registre_com">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contribuable">Compte Contribuable</label>
                                        <input type="text" class="form-control form-control-sm" name="contribuable" id="compte_contrib">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="pays">Pays</label>
                                        <select name="pays" class="form-control form-control-sm" id="pays" required>
                                            <option value="" selected disabled>Choisissez votre pays</option>
                                            <?php
                                            foreach ($pays as $result){
                                                echo "<option value='".$result['ID_PAYS']."'>".$result['LIB_PAYS']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pays">Ville</label>
                                        <select name="vile" class="form-control form-control-sm" id="ville" required>
                                            <option value="" selected disabled>Choisissez votre ville</option>
                                            <?php
                                            foreach ($ville as $result){
                                                echo "<option value='".$result['ID_VILLE']."'>".$result['LIB_VILLE']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="societe">Type de Societe</label>
                                        <select name="type_soc" class="form-control form-control-sm" id="societe"
                                                required>
                                            <option value="" selected disabled>Choisissez votre type de société</option>
                                            <?php
                                            foreach ($type_soc as $result){
                                                echo "<option value='".$result['ID_TYPE_SOC']."'>".$result['LIB_TYPE_SOC']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="juridique">Forme Juridique</label>
                                        <select name="form_jur" class="form-control form-control-sm" id="juridique" required>
                                            <option value="" selected disabled>Choisissez votre forme juridique</option>
                                            <?php
                                            foreach ($form_jur as $result){
                                                echo "<option value='".$result['ID_FORM_JUR']."'>".$result['LIB_FORM_JUR']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="secteur">Secteurs d'Activités </label>
                                        <select multiple name="sect_act[]" class="form-control form-control-sm" id="secteur"
                                                required>
                                            <option selected value="" disabled>Maintenez Ctrl pour une sélection multiple</option>
                                            <?php
                                            foreach ($sect_act as $result){
                                                echo "<option value='".$result['ID_SECT']."'>".$result['LIB_SECT']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="photo">Logo</label>
                                        <input type="file" class="form-control form-control-sm" id="photo" name="logo"
                                               placeholder="Taille 100X100 pixels">
                                    </div>
                                </div>

                                <div class="card-header">
                                    <h4>Informations du Compte Entreprise</h4>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="emailInscriptionE">Email</label>
                                        <input type="email" class="form-control form-control-sm" id="emailInscriptionE"
                                               placeholder="Email Entreprise" required name="emailInscriptionE">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mdp">Mot de Passe</label>
                                        <input type="password" class="form-control form-control-sm" id="mdp"
                                               placeholder="Mot de passe" required name="mdp">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mdpverif">Confirmation du mot de passe</label>
                                        <input type="password" class="form-control form-control-sm" id="mdpverif"
                                               placeholder="Confirmer le mot de passe" required name="mdpverif">
                                    </div>
                                </div>

                                <div class="card-header">
                                    <h4>Informations interlocuteur</h4>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control form-control-sm" id="nom" name="nom" placeholder="Nom" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="prenom">Prenom</label>
                                        <input type="text" class="form-control form-control-sm" id="prenom" name="prenom" placeholder="Prenom" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="genre">Genre</label>
                                        <select name="genre" class="form-control form-control-sm" id="genre" >
                                            <option value="" selected disabled>Choisissez votre genre</option>
                                            <?php
                                            foreach ($genre as $result){
                                                echo "<option value='".$result['ID_GENRE']."'>".$result['LIB_GENRE']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="telinter">Mobile</label>
                                        <input type="tel" class="form-control form-control-sm" id="telinter" placeholder="0225448522"  name="telinter">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="emailinter">Email</label>
                                        <input type="email" name="emailinter" class="form-control form-control-sm" id="emailinter" placeholder="Email interlocuteur"  >
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-outline-primary ">
                                <input type="reset" class="btn btn-outline-danger ">


                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    50%
                                </div>
                            </div>
                        </div>
                    </div>
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
<!--Reponse du serveur lors de linscription-->

<!---***********Script*****************-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
