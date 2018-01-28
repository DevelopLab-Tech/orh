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
include 'inc/barConnexionEntreprise.php';
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
        <!--******************************************************DEPOSER offre****************************-->
        <div class="row">
            <div class="col-md-4">
                <div class="nav flex-column nav-pills my-3 bg-light" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-user-circle-o"></i> Informations Entreprise</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-file-pdf-o"></i> Deposer une offre</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"> <i class="fa fa-building-o"></i> Souscriptions</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-gears"></i> Parametres</a>
                </div>
                <div class="card border-primary mb-3">
                    <div class="card-header"><b>Statut</b></div>
                    <div class="card-body text-primary">
                        <p class="card-text">En attente de validation par ORH...</p>
                    </div>
                </div>

                <div class="card my-3">
                    <h4 class="card-header">Votre Logo</h4>
                    <div class="card-body justify-content-center">
                        <img src="img/logodefault.jpg" class="card-img img-fluid" alt="photo">
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
                            <h3 class="py-2">Informations Entreprise</h3>
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
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <form action="php/envoyerCV.php" method="post" enctype="multipart/form-data" class="form-group">
                            <label class="control-label">Sélectionnez Fichier</label>
                            <div class="file-loading">
                                <input id="input-fa" name="input-fa[]" type="file" required accept="application/pdf">
                            </div>
                                    <input type="submit" class="btn btn-outline-success my-3" value="Envoyer l'offre" name="envoyerOffre" id="envoyerOffre">
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
                                            <form action="php/souscriptionEntreprise.php" method="post" enctype="multipart/form-data">
                                                <input class="btn btn-outline-success" type="submit" value="Souscrire">
                                            </form>

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="card">
                            <div class="card-header">
                                <h4>Modifier mes parametres</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-header"> <!--debut-->
                                    <h4>Informations du Compte Entreprise</h4>
                                </div>

                                <form action="php/modifierEntreprise.php" method="post" enctype="multipart/form-data" class="my-3">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="mdp">Ancien mot de passe </label>
                                            <input type="password" class="form-control form-control-sm" id="mdp"
                                                   placeholder="Mot de passe"  name="mdp" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="mdpNew">Nouveau Mot de Passe</label>
                                            <input type="password" class="form-control form-control-sm" id="mdpNew"
                                                   placeholder="Mot de passe" required name="mdpNew">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="mdpverif">Confirmation du mot de passe</label>
                                            <input type="password" class="form-control form-control-sm" id="mdpverif"
                                                   placeholder="Confirmer le mot de passe" required name="mdpverif">
                                        </div>
                                    </div>
                                    <input type="submit" value="Modifier Mot de passe" class="btn btn-outline-success">
                                </form>
                                <form action="php/modifierEntreprise.php" method="post" enctype="multipart/form-data">

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
                                    <input type="submit" value="Modifier" class="btn btn-outline-success">
                                </form>
                            </div>
                            <div class="card-footer">
                                Merci et restez connecter sur orh...
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
</body>

</html>
