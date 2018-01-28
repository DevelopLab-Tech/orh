<?php
/**
 * Created by PhpStorm.
 * User: inno-kirito
 * Date: 17/01/2018
 * Time: 21:59
 */ ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Orh</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/windows10_icon.css">
    <link rel="stylesheet" href="css/styleA.css">

</head>
<body class="bg-light">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <a href="dashboard.php"><img src="../img/logo_ORH.png" class="mb-3 img-fluid" height="100" alt=""></a>

            <!--**************MENU SIDE BAR***********-->
            <div class="nav flex-column nav-pills my-2 mt-4 text-dark bg-white" id="sidebar" role="tablist">
                <a href="#tableauDeBord" class="nav-link active " id="sideTableauDeBord" data-toggle="pill"> <i
                            class="fa fa-dashboard"></i> Tableau de Bord</a>
                <!--Icon avec badge-->
                <a href="#gestionCv" class="nav-link" id="sideGestionCv" data-toggle="pill"><i
                            class="fa fa-file-pdf-o"></i> Gestion CV <span class="badge badge-success">12</span>
                </a>
                <a href="#offres" class="nav-link" id="sideOffres" data-toggle="pill"><i
                            class="fa fa-folder-open-o"></i> Offres d'emploi</a>
                <a href="#souscription" class="nav-link" id="sideSouscription" data-toggle="pill"> <i
                            class="fa fa-table"></i> Souscriptions</a>
                <a href="#service" class="nav-link" id="sideService" data-toggle="pill"> <i
                            class="fa fa-product-hunt"></i>
                    Services</a>
                <a href="#ecrireOffres" class="nav-link" id="sideEcrireOffres" data-toggle="pill"><i
                            class="fa fa-pencil"></i> Ecrire Offre</a>
                <a href="#actualite" class="nav-link" id="sideActualite" data-toggle="pill"><i class="fa fa-pencil"></i>
                    Ecrire Actualité</a>
                <a href="#candidat" class="nav-link" id="sideCandidat" data-toggle="pill"> <i
                            class="fa fa-users"></i> Candidats</a>
                <a href="#entreprise" class="nav-link" id="sideAdmin" data-toggle="pill"> <i
                            class="fa fa-building-o"></i> Entreprises</a>
            </div>
            <button class="btn btn-outline-primary my-3 btn-block"><i class="fa fa-sign-out"></i> Deconnexion</button>
        </div>

        <div class="col-md-10">
            <nav class="navbar navbar-expand-md" id="navbarAdmin" style="min-height:6.25rem ">
                <ul class="navbar-nav text-white ml-auto ">
                    <li class="nav-item">
                        <a href="" class="text-white nav-link" data-toggle="modal" data-target="#modalParametre"><i
                                    class="fa fa-gear fa-3x mx-3"></i></a>
                    </li>
                </ul>
            </nav>

            <!--Dashboard***************************************-->
            <div class="container-fluid bg-white">
                <div class="tab-content" id="sidebarContent">

                    <!--TABLEAU DE BORD***************************************************-->
                    <div class="tab-pane fade show active" id="tableauDeBord" role="tabpanel">
                        <div id="boxInfo" class=" card border-primary bg-transparent p-1 my-2">
                            <div class="row justify-content-center">
                                <div class=" card col-md-3 border-white">
                                    <div class=" text-center text-success mb-3">
                                        <div class="card-body">
                                            <h1 class="display-4">
                                                <i class="icons8-group"></i>
                                            </h1>
                                            <h6 class="card-text text-dark">50 Candidats</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class=" card col-md-3 border-white">
                                    <div class=" text-center text-primary mb-3">
                                        <div class="card-body">
                                            <h1 class="display-4">
                                                <i class="icons8-document"></i>
                                            </h1>
                                            <h6 class="card-text text-dark">50 Curiculum Vitae</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class=" card col-md-3 border-white">
                                    <div class=" text-center text-danger mb-3">
                                        <div class="card-body">
                                            <h1 class="display-4">
                                                <i class="fa fa-building-o"></i>
                                            </h1>
                                            <h6 class="card-text text-dark">100 Entreprises</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--GESTION DES CV*************-->
                    <div class="tab-pane fade mt-2" id="gestionCv" role="tabpanel">
                        <div class="card my-4">
                            <h3 class="card-header">
                                <i class="fa fa-file-pdf-o"></i> Liste des Curiculum Vitae non lu(s)
                            </h3>
                            <div class="card-body">
                                <ul class="list-group">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between"><a href="#danslabdd">Nom
                                                dans la bd liens vers pdf</a></li> <!--BDDDDDDDDDDDDDDDD-->
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <h3 class="card-header">
                                <i class="fa fa-file-archive-o"></i> Liste des Curiculum Vitae lu(s)
                            </h3>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between"><a href="#danslabdd">Nom
                                            dans la bd liens vers pdf</a></li>  <!--BDDDDDDDDDDDDDDDD-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--OFRES EMPLOI-->
                    <div class="tab-pane fade" id="offres" role="tabpanel">

                        <div class="card my-3">
                            <h3 class="card-header">Offres D'emploi</h3>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nom Entreprise</th>
                                        <th scope="col">Secteur Activité</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contenu de l'offre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Entreprise 1</th>
                                        <td>Informatiques</td>
                                        <td>012323232</td>
                                        <td>mail@mail.com</td>
                                        <td><a class="btn btn-primary" href="#danslabdd">Consulter les Details</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="souscription" role="tabpanel">

                        <div class="row">
                            <h2 class="text-center col-md-10 mb-3">Liste des souscriptions</h2>
                        </div>
                        <div class="row">

                            <div class="col-md-5">
                                <h4>Entreprise</h4>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Nom : <strong>#Dans la bd</strong> <br>
                                        Service : <strong>#service dans la bd</strong><br>
                                        Contact : <strong>#numero</strong> <br>
                                        Email: <a href="mailto:#danslabd"></a><strong>#email</strong>

                                    </li>
                                </ul>

                            </div>

                            <div class="col-md-5">
                                <h4 class="">Candidat</h4>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Nom : <strong>#Dans la bd</strong> <br> <!--BDDDDDDDDDDDDDDDD-->
                                        Service : <strong>#service dans la bd</strong><br> <!--BDDDDDDDDDDDDDDDD-->
                                        Contact : <strong>#numero</strong> <br> <!--BDDDDDDDDDDDDDDDD-->
                                        Email: <a href="mailto:#danslabd"></a><strong>#email</strong>
                                        <!--BDDDDDDDDDDDDDDDD-->

                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <!--SERVICE ET FORMATION**************************************************************-->
                    <div class="tab-pane fade" id="service" role="tabpanel">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card my-4">
                                    <h3 class="card-header bg-dark text-white"> Ajouter un service <b>entreprise</b>
                                    </h3>
                                    <div class="card-body">
                                        <form action="php/services.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="serviceTitre">Nom service </label>
                                                <input type="text" class="form-control" id="serviceTitre"
                                                       name="serviceTitre" required>
                                                <label for="serviceCorps">Corps du service </label>
                                                <input type="text" class="form-control" name="serviceCorps"
                                                       id="serviceCorps">
                                                <div class="mt-3">
                                                    <input type="submit" name="valide" class="btn btn-outline-primary">
                                                    <input type="reset" class="btn btn-outline-danger">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card my-4">
                                    <h3 class="card-header bg-primary text-white"> Ajouter un service <b>Candidat</b>
                                    </h3>
                                    <div class="card-body">
                                        <form action="php/services.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="serviceCndTitre">Nom service </label>
                                                <input type="text" class="form-control" id="serviceCndTitre"
                                                       name="serviceCndTitre" required>
                                                <label for="serviceCndCorps">Corps du service </label>
                                                <input type="text" class="form-control" name="serviceCndCorps"
                                                       id="serviceCndCorps">
                                                <div class="mt-3">
                                                    <input type="submit" name="valide" class="btn btn-outline-primary">
                                                    <input type="reset" class="btn btn-outline-danger">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-5">
                            <h3 class="card-header">
                                Liste de nos services/formations
                            </h3>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">offre de ...
                                        <div class="justify-content-end">
                                            <button class="btn btn-outline-success" data-target="#modalModifierSercice"
                                                    data-toggle="modal">Modifier
                                            </button>
                                            <button class="btn btn-outline-danger">Supprimer</button>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex ">offre de..</li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <!--ECRIRE UNE OFFRE-->
                    <div class="tab-pane fade" id="ecrireOffres" role="tabpanel">
                        <div class="card my-4">
                            <h3 class="card-header bg-dark text-white"> Ecrire une offre
                            </h3>
                            <div class="card-body">
                                <form action="php/offres.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="titreOffre">Titre </label>
                                        <input type="text" class="form-control" id="titreOffre" name="titreOffre">
                                        <label for="offreCoprs">Corps de l'offre </label>
                                        <textarea class="form-control" name="offreCorps" id="offreCoprs"></textarea>
                                        <div class="mt-3">
                                            <input type="submit" name="valide" class="btn btn-outline-primary">
                                            <input type="reset" class="btn btn-outline-danger">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="card mt-5">
                            <h3 class="card-header">
                                </i> Liste de nos offres
                            </h3>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">offre de ...
                                        <div class="justify-content-end">
                                            <button class="btn btn-outline-success" data-target="#modalModifierOffre"
                                                    data-toggle="modal">Modifier
                                            </button>
                                            <button class="btn btn-outline-danger">Supprimer</button>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex ">offre de..</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ECRIRE ACTUALITE*****************************************-->
                    <div class="tab-pane fade" id="actualite" role="tabpanel">
                        <div class="card my-4">
                            <h3 class="card-header bg-dark text-white"> Ecrire une Actualité
                            </h3>
                            <div class="card-body">
                                <form action="php/article.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="titreActu">Titre </label>
                                        <input type="text" class="form-control" id="titreActu" name="titreActu">
                                        <label for="img">Image de l'actualité </label>
                                        <input type="file" class="form-control" id="img" name="img">
                                        <label for="article">Corps de l'actualité </label>
                                        <textarea class="form-control" name="article" id="article"></textarea>
                                        <div class="mt-3">
                                            <input type="submit" name="valide" class="btn btn-outline-primary">
                                            <input type="reset" class="btn btn-outline-danger">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <h3 class="card-header">
                                </i> Liste des actualités
                            </h3>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">Actu 1
                                        <div class="justify-content-end">
                                            <button class="btn btn-outline-success" data-target="#modalModifierActu"
                                                    data-toggle="modal">Modifier
                                            </button>
                                            <button class="btn btn-outline-danger">Supprimer</button>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex ">Actu 2</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!--CANDIDAT-->
                    <div class="tab-pane fade" id="candidat" role="tabpanel">

                        <form action="php/rechercheCandidat.php" method="post" enctype="multipart/form-data"
                              id="formRecherch" class="mt-2">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="competence">Competence</label>
                                    <select name="competence" class="form-control form-control-sm" id="competence">
                                        <option value="" selected disabled>Aucune competence selectionner</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="genre">Genre</label>
                                    <select name="genre" class="form-control form-control-sm" id="genre">
                                        <option value="" selected disabled>Aucun genre selectionner</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="localite">Localité</label>
                                    <select name="localite" class="form-control form-control-sm" id="localite" required>
                                        <option value="" selected disabled>Aucun critere selectionner</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="etude">Niveau Etude</label>
                                    <select name="etude" class="form-control form-control-sm" id="etude" required>
                                        <option value="" selected disabled>Aucun critere selectionner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="contrat">Type de contrat</label>
                                    <select name="contrat" class="form-control form-control-sm" id="contrat" required>
                                        <option value="" selected disabled>Aucun critere selectionner</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="mat">Situation Matrimoniale</label>
                                    <select name="mat" class="form-control form-control-sm" id="mat" required>
                                        <option value="" selected disabled>Aucun critere selectionner</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="langue">Langue Parlé</label>
                                    <select name="langue" class="form-control form-control-sm" id="langue" required>
                                        <option value="" selected disabled>Aucun critere selectionner</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li class="media my-3 ">
                                        <img class="mr-3" src="img/avatar.png"
                                             style="max-height: 128px;max-width: 128px">
                                        <div class="media-body ">
                                            <h5 class="mt-0 mb-1">Nom candidat dans la bdd</h5>
                                            <p class="text-justify">
                                                <b>Prenom : </b> bdd <br>

                                                <b>Email : </b> bdd <br>
                                                <b>Contact : </b> bd <br>
                                                <b>Competence : </b> bdddddd
                                            </p>
                                            <div class="row">
                                                <a href="#video" class=" mx-2 btn btn-outline-success">Voir le CV
                                                    Video</a>
                                                <a href="#pdf" class="  mx-2 btn btn-outline-primary">Voir le CV PDF</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media my-3 ">
                                        <img class="mr-3" src="img/avatar.png"
                                             style="max-height: 128px;max-width: 128px">
                                        <div class="media-body ">
                                            <h5 class="mt-0 mb-1">Nom candidat dans la bdd</h5>
                                            <p class="text-justify">
                                                <b>Prenom : </b> bdd <br>

                                                <b>Email : </b> bdd <br>
                                                <b>Contact : </b> bd <br>
                                                <b>Competence : </b> bdddddd
                                            </p>
                                            <div class="row">
                                                <a href="#video" class=" mx-2 btn btn-outline-success">Voir le CV
                                                    Video</a>
                                                <a href="#pdf" class="  mx-2 btn btn-outline-primary">Voir le CV PDF</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media my-3 ">
                                        <img class="mr-3" src="img/avatar.png"
                                             style="max-height: 128px;max-width: 128px">
                                        <div class="media-body ">
                                            <h5 class="mt-0 mb-1">Nom candidat dans la bdd</h5>
                                            <p class="text-justify">
                                                <b>Prenom : </b> bdd <br>

                                                <b>Email : </b> bdd <br>
                                                <b>Contact : </b> bd <br>
                                                <b>Competence : </b> bdddddd
                                            </p>
                                            <div class="row">
                                                <a href="#video" class=" mx-2 btn btn-outline-success">Voir le CV
                                                    Video</a>
                                                <a href="#pdf" class="  mx-2 btn btn-outline-primary">Voir le CV PDF</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="entreprise" role="tabpanel">
                        <div class="card mt-5">
                            <h3 class="card-header">Liste des entreprises non validées</h3>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">
                                        Entreprise
                                        <div class="justify-content-end">
                                            <form action="php/validerEntreprise.php" method="post"
                                                  enctype="multipart/form-data" class="d-inline mx-2">
                                                <input type="submit" class="btn btn-outline-success">
                                            </form>
                                            <button class="btn btn-outline-primary" data-target="#modalEntreprise"
                                                    data-toggle="modal">Voir l'entreprise
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="card mt-5">
                            <h3 class="card-header">
                                Liste des entreprises validées
                            </h3>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">Entreprise
                                        <div class="justify-content-end">
                                            <button class="btn btn-outline-primary" data-target="#modalEntreprise"
                                                    data-toggle="modal">Voir l'entreprise
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade" id="admin" role="tabpanel">admin</div>


                </div>


            </div>
        </div>
    </div>
</div>
</div>


<!--***********************MODAL**********************-->

<!--Modal modifier services*********-->
<div class="modal fade" id="modalModifierSercice" tabindex="-1" role="dialog" aria-labelledby="modalModifierSercice"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalModifierSerciceLabel"> Modifier Sercice/Formation </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/services.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="serviceTitre">Nom service/formation </label>
                        <input type="text" class="form-control" id="serviceTitre" name="serviceTitre" required>
                        <label for="serviceCorps">Corps du service </label>
                        <input type="text" class="form-control" name="serviceCorps" id="serviceCorps">
                        <div class="mt-3">
                            <input type="submit" name="valide" class="btn btn-outline-primary">
                            <input type="reset" class="btn btn-outline-danger">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal modifier offre*********-->
<div class="modal fade" id="modalModifierOffre" tabindex="-1" role="dialog" aria-labelledby="modalModifierOffre"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalModifierOffreLabel"> Modifier Offre </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/offres.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="offreTitre">Titre </label>
                        <input type="text" class="form-control" id="offreTitre" name="offreTitre" required>
                        <label for="offreCorps">Libellé </label>
                        <input type="text" class="form-control" name="offreCorps" id="offreCorps">
                        <div class="mt-3">
                            <input type="submit" name="valide" class="btn btn-outline-primary">
                            <input type="reset" class="btn btn-outline-danger">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Modal modifier actualite*********-->

<div class="modal fade" id="modalModifierActu" tabindex="-1" role="dialog" aria-labelledby="modalModifierActu"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalModifierActuLabel"> Modifier Actualité </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/article.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titreActu">Titre </label>
                        <input type="text" class="form-control" id="titreActu" name="titreActu">
                        <label for="img">Image de l'actualité </label>
                        <input type="file" class="form-control" id="img" name="img">
                        <label for="article">Corps de l'actualité </label>
                        <textarea class="form-control" name="article" id="article"></textarea>
                        <div class="mt-3">
                            <input type="submit" name="valide" class="btn btn-outline-primary">
                            <input type="reset" class="btn btn-outline-danger">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal modifier actualite*********-->

<div class="modal fade" id="modalParametre" tabindex="-1" role="dialog" aria-labelledby="modalParametre"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalParametreLabel"> Modifier Vos parametres de connexion </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/modifierAdmin.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pseudo"> Modifier Pseudonyme </label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo">
                        <label for="mdpAncien">Ancien mot de passe</label>
                        <input class="form-control" type="text" name="article" id="mdpAncien" required>
                        <label for="mdpNew">Nouveau mot de passe</label>
                        <input class="form-control" type="text" name="mdpNew" id="mdpNew" required>
                        <label for="mdpNew">Confirmer mot de passe</label>
                        <input class="form-control" type="text" name="mdpNew" id="mdpconfirm" required>
                        <div class="mt-3">
                            <input type="submit" name="valide" class="btn btn-outline-primary">
                            <input type="reset" class="btn btn-outline-danger">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--*****************************************Modal entreprise*************************-->

<div class="modal fade" id="modalEntreprise" tabindex="-1" role="dialog" aria-labelledby="modalEntreprise"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEntrepriseLabel"> Nom entreprise </h5>
                <!--BDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="img/preview.jpg" alt="logo_entreprise" style="max-height: 20rem; width: 100%"
                     class="img-fluid">

                <h6 class="my-2 d-inline">Sigle : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Secteur Activité : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Raison Sociale : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Telephone: </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Fax : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Site Internet : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Adresse mail: </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline ">Localisation : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Type de Societe : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Forme Juridique : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Registre De Commerce : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h6 class="my-2 d-inline">Compte Contribuable : </h6>
                <p class="d-inline"> bdd</p> <br>
                <h5 class="my-2 d-inline text-primary">Information sur l'interlocuteur</h5>
                <div class="row my-2">
                    <div class="col-md-4">
                        <img src="img/avatar.png" alt="logo_entreprise" style="max-height: 20rem; width: 100%"
                             class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h6 class="my-2 d-inline">Nom : </h6>
                        <p class="d-inline"> bdd</p> <br>
                        <h6 class="my-2 d-inline">Prenom : </h6>
                        <p class="d-inline"> bdd</p> <br>
                        <h6 class="my-2 d-inline">Genre : </h6>
                        <p class="d-inline"> bdd</p> <br>
                        <h6 class="my-2 d-inline">Telephone: </h6>
                        <p class="d-inline"> bdd</p> <br>
                        <h6 class="my-2 d-inline">Adresse mail: </h6>
                        <p class="d-inline"> bdd</p> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--*************************************Script******************************-->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('article');
</script>
<script>
    CKEDITOR.replace('description');
</script>
</body>
</html>