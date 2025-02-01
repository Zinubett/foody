

function envoidem() {
     var produit=$("#addproduit").val();
     var dateliv=$("#adddateliv").val();
     var heure=$("#addheure").val();
     var lieu_depart=$("#addlieu_depart").val();
     var lieu_arrivee=$("#addlieu_arrivee").val();
     

    $.post("models/envoidem.php",
        {
            produit:produit,
            dateliv:dateliv,
            heure:heure,
            lieu_depart:lieu_depart,
            lieu_arrivee:lieu_arrivee,
            
            
        },
        function (data,status){
            $("#reponse").html(data);
           $("#envoidem").html(data);
            location.reload(); //recherger la page 

        },



        );

}
function getdemande(id_demande){

var conf=confirm("vous etes sure de lancer le traitement ... ?"+id_demande);

if ( conf==true)
{

    $.post("models/etatdem.php",
    {
        id_demande:id_demande
    },
    function(data,status)
    { //parcourir l'objet en retour(php)
       
        location.reload(); 

    });
    
}

}


function getoffre(id_offre){
    //sauvgarder l'id dans idh
    $("#idh").val(id_offre);
    //appel ajax
    
    $.post("models/getoffre.php",
            {
             id_offre:id_offre
             },
        function(data,status)
        {
            //parcourir l'objet en retour (php)
            var off=JSON.parse(data);

            $("#upproduit").val(off.produit);
            $("#updateliv").val(off.dateliv);
            $("#upheure").val(off.heure);
            $("#uplieu_depart").val(off.lieu_depart);
             $("#uplieu_arrivee").val(off.lieu_arrivee);
        
        } );
            $("#updateoff").modal("show");
    

}

function updateoffre ()
{

    //recupération des variables

    var produit=$("#upproduit").val();
    var dateliv=$("#updateliv").val();
    var heure=$("#upheure").val();
    var lieu_depart=$("#uplieu_depart").val();
    var lieu_arrivee=$("#uplieu_arrivee").val();
    var prix=$("#addprix").val();


    
        var id_offre=$("#id_offre").val();
   
    $.post("models/updateoffre.php",
        {
 id_offre:id_offre,           
produit:produit,
dateliv:dateliv,
heure:heure,
lieu_depart:lieu_depart,
lieu_arrivee:lieu_arrivee,
prix:prix








          
        },
        function(data,status)
        {
            $("#reponse").html(data);
            $("#updateoff").modal("hide");
        }

        );


}




function deloff(id_offre){

var conf=confirm("vous etes sure de refuser ... ?");

if (conf==true) {

    //appel ajax
        $.post("models/refoff.php" ,
        {
            id_offre:id_offre
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}
function getlivraisonc(id_rep){

var conf=confirm("la livraison est en cours ... ?"+id_rep);

if ( conf==true)
{

    $.post("models/etatlivraison.php",
    {
        id_rep:id_rep
    },
    function(data,status)
    { //parcourir l'objet en retour(php)
       
        location.reload(); 

    });
    
}

}

function getlivraisonl(id_rep){

var conf=confirm("la livraison est livrée ... ?"+id_rep);

if ( conf==true)
{

    $.post("models/etatlivraisonl.php",
    {
        id_rep:id_rep
    },
    function(data,status)
    { //parcourir l'objet en retour(php)
       
        location.reload(); 

    });
    
}

}









function getprofillvr(id_livreur){
    //sauvgarder l'id dans idh
    $("#id_livreur").val(id_livreur);
    //appel ajax

    $.post("models/getprofillvr.php",
            {
             id_livreur:id_livreur
             },
        function(data,status)
        {
            //parcourir l'objet en retour (php)
            var liv=JSON.parse(data);

            $("#upnom").val(liv.nom);
            $("#upprenom").val(liv.prenom);
            $("#upadresse").val(liv.adresse);
            $("#uptel").val(liv.tel);
             $("#upmail").val(liv.mail);
              $("#upmdp").val(liv.mdp);
               $("#upnum_patent").val(liv.num_patent);
         
        } );
            $("#updatelivreure").modal("show");
    

}

function updateprofillv ()
{

    //recupération des variables

    var nom=$("#upnom").val();
    var prenom=$("#upprenom").val();
    var adresse=$("#upadresse").val();
    var tel=$("#uptel").val();
    var mail=$("#upmail").val();
    var mdp=$("#upmdp").val();
    var num_patent=$("#upnum_patent").val();
  var id_livreur=$("#id_livreur").val();
   
    $.post("models/updateprofillv.php",
        {
id_livreur:id_livreur,
nom:nom,
prenom:prenom,
adresse:adresse,
tel:tel,
mail:mail,
mdp:mdp,
num_patent:num_patent
      
        },
        function(data,status)
        {
            $("#reponse").html(data);
          location.reload();    
        }

        );


}




function getprofil(id_vendeur){
    //sauvgarder l'id dans idh
    $("#id_vendeur").val(id_vendeur);
    //appel ajax

    $.post("models/getprofil.php",
            {
             id_vendeur:id_vendeur
             },
        function(data,status)
        {
            //parcourir l'objet en retour (php)
            var vend=JSON.parse(data);

            $("#upnom").val(vend.nom);
            $("#upprenom").val(vend.prenom);
            $("#upadresse").val(vend.adresse);
            $("#uptel").val(vend.tel);
             $("#upmail").val(vend.mail);
              $("#upmdp").val(vend.mdp);
               $("#upnum_patent").val(vend.num_patent);
         
        } );
            $("#updatevend").modal("show");
    

}


function updatevend ()
{

    //recupération des variables

    var nom=$("#upnom").val();
    var prenom=$("#upprenom").val();
    var adresse=$("#upadresse").val();
    var tel=$("#uptel").val();
    var mail=$("#upmail").val();
    var mdp=$("#upmdp").val();
    var num_patent=$("#upnum_patent").val();
    var id_vendeur=$("#id_vendeur").val();
   
    $.post("models/updateprofil.php",
        {
id_vendeur:id_vendeur,
nom:nom,
prenom,prenom,
adresse:adresse,
tel:tel,
mail:mail,
mdp:mdp,
num_patent:num_patent







          
        },
        function(data,status)
        {
            $("#reponse").html(data);
         location.reload();        }

        );


}

function motdepasse() {
     var nomcomplet=$("#addnomcomplet").val();
     var numtel=$("#addnumtel").val();
     var email=$("#addemail").val();
    

    $.post("models/motdepasse.php",
        {
            nomcomplet:nomcomplet,
            numtel:numtel,
            email:email,
           
            
            
        },
        function (data,status){
            $("#reponse").html(data);
           $("#motdepasse").html(data);
            //location.reload(); //recherger la page 

        },



        );

}