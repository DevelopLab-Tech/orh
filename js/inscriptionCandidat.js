/**
 * Created by DEGNI on 21/01/2018.
 */
function inscription(){
    var obj= new FormData(document.getElementById("formCandidat"));
    //obj.nom=  encodeURIComponent("degni") ;
    //obj.prenom=  encodeURIComponent("jocelin");
    $.ajax({
        type : 'POST',
        url : 'php/inscriptionCandidat.php',
        data : obj,
        cache : false,
        dataType : 'json',
        processData: false,
        contentType: false,
        success : afficheModal,
        error : function () {
            alert("erreur serveur");
        }
    });

}

function afficheModal(reponse) {
    var obj = $.parseJSON(reponse)
    $('#msgServeur').html(obj.message);
    $('#btnReponse').trigger('click');
    $('#reset').trigger(obj.action);

}

$(document).ready(
    $("#formCandidat").submit( function (e) {
        e.preventDefault()
        inscription();

    })


);