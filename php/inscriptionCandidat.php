<?php
/**
 * Created by PhpStorm.
 * User: inno-kirito
 * Date: 15/01/2018
 * Time: 14:46
 *
 */

header("Content-Type: text/html ; charset=utf-8");
header("Cache-Control: no-cache , private");
include 'connexionBD.php';

$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
if ($email===FALSE){ // email non valide
    $json["message"] = "<div class=\'text-danger\'>Email non valide!<div>";
    $json["action"] = "";
    echo json_encode($json);

}elseif($email = $db->query("select * from candidat where EMAIL_CND ='".$_POST['email']."' and ACTIF_CND='1'")->fetch()){ // test de l'existance de l'email
    $json["message"] = "<div class='text-danger'>L'email existe déja.</div>";
    $json["action"] = "";
    echo json_encode($json);

}elseif($_POST['mdp']!=$_POST['mdpverif']){ // mot de passe different
    $json["message"] = "<div class='text-danger'>Mot de passe differents.</div>";
    $json["action"] = "";
    echo json_encode($json);

}else{
    try{
        $db->beginTransaction();
        $req = $db->prepare("INSERT INTO candidat(ID_GENRE,ID_NIVEAU,ID_CONTRAT,ID_NAT,NOM_CND, PRENOM_CND,DATE_NAISS_CND,CONTACT_CND,".
            "EMAIL_CND,ANNEE_EXP_CND,PATH_PHOTO_CND,CLE_CND,ACTIF_CND) VALUES(:id_genre,:id_niveau,:id_contrat,:id_nat,:nom_cnd,:prenom_cnd,:date_naiss_cnd,:contact_cnd,".
            ":email_cnd,:annee_exp_cnd,:path_photo_cnd,:cle_cnd,:actif_cnd)"
            );
        $path_photo = 'default.png';
        $cle = md5(microtime(TRUE)*1000);
        $actif = 1;
        $req->bindParam(":id_genre",$_POST['genre']);
        $req->bindParam(":id_niveau",$_POST['niveau']);
        $req->bindParam(":id_contrat", $_POST['contrat']);
        $req->bindParam(":id_nat", $_POST['nat']);
        $req->bindParam(":nom_cnd", $_POST['nom']);
        $req->bindParam(":prenom_cnd", $_POST['prenom']);
        $req->bindParam(":date_naiss_cnd", $_POST['date_naiss']);
        $req->bindParam(":contact_cnd", $_POST['tel']);
        $req->bindParam(":email_cnd", $_POST['email']);
        $req->bindParam(":annee_exp_cnd", $_POST['anexp']);
        $req->bindParam(":path_photo_cnd",$path_photo);
        $req->bindParam(":cle_cnd", $cle);
        $req->bindParam(":actif_cnd", $actif);
        $req->execute();

        // domaine de competence (mutiple select)
        $id_cnd = $db->lastInsertId();
        $dom_comp = $_POST['dom_comp'];
        foreach ($dom_comp as $id_dom){
            $req = $db->prepare("insert into avoir_dom(ID_CND, ID_DOM) VALUES(:id_cnd, :id_dom)");
            $req->bindParam(":id_cnd",$id_cnd);
            $req->bindParam(":id_dom",$id_dom);
            $req->execute();
        }
        // idem langue parlées
        $lang = $_POST['langue'];
        foreach ($lang as $id_lang){
            $req =$db->query("insert into langue(ID_CND, ID_LANG) VALUES(:id_cnd,:id_lang)");
            $req->bindParam(":id_cnd",$id_cnd);
            $req->bindParam(":id_lang",$id_lang);
            $req->execute();
        }
        //idem localiser(cnd,pays, ville)
        $req = $db->prepare("insert into localiser_cnd(ID_CND, ID_PAYS, ID_VILLE) values(:id_cnd, :id_pays,:id_ville)");
        $req->bindParam(":id_cnd",$id_cnd);
        $req->bindParam(":id_pays",$_POST['pays']);
        $req->bindParam(":id_ville",$_POST['ville']);
        $req->execute();



        // creation de compte
        $req = $db->prepare("insert into compte(MDP_COMPTE_CND) values(:mdp)");
        $req->bindParam(":mdp",$_POST['mdp']);

        $id_compte = $db->lastInsertId();  // id du compte creer

           //correspondance entre le candidat et le compte.
        $req = $db->prepare("insert into creer_compte_cnd(ID_CND, ID_COMPTE_CND) values(:id_cnd, :id_compte_cnd)");
        $req->bindParam(":id_cnd",$id_cnd);
        $req->bindParam(":id_compte_cnd",$id_compte);





    }catch(Exception $e){
    $json["message"]="<div class='text-danger'>Une erreur est survenue lors de l'enregistement. <br>Veuillez ressayer!<br><br>Erreur:".$db->errorCode()."<br>InfoErreur:".$db->errorInfo()."</div>";
        $json["action"] = "";
        echo json_encode($json);

    }

}


?>


