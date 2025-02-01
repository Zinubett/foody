

function insertcoursier(){
    var Nom=$("#addnom").val();
    var prenom=$("#addprenom").val();
    var num_tele=$("#addnumtele").val();
    var cin=$("#addcin").val();
    var login=$("#addlogin").val();
    var mp=$("#addmp").val();
   
    


    $.post("model/insertcoursier.php",
        {        
         Nom:Nom,
         prenom:prenom,
         num_tele:num_tele,
         cin:cin,
         login:login,
         mp:mp
        
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);

           }

);
}









function getetatclient(id_promo){
   //enregristrement id fonction
   $("#id_promo_hidden").val(id_promo);

$.post("model/getpromotion.php",

{
id_promo:id_promo

},

function (data,status){

    var promotion = JSON.parse(data);
     $("#uplibele").val(promotion.nom_promo);
     $("#upprixinit").val(promotion.prix_unitiale);
     $("#upprixpromo").val(promotion.prix_promo);
     $("#updescription").val(promotion.description_promo);
     $("#updatedebut").val(promotion.date_debut);
     $("#updatefin").val(promotion.date_fin);
      $("#upimage").val(promotion.image);
}


    );
$("#modifier").modal("show");



}






function getetatclient(id_client){

var conf=confirm("vous etes sure de valider ce client ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/getetatclient.php" ,
        {
           id_client: id_client
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}





function getetatrestaurant(id_rest){

var conf=confirm("vous etes sure de valider ce restaurant ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/getetatrestaurant.php" ,
        {
           id_rest: id_rest
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}


function suppclient(id_client){

var conf=confirm("vous etes sure de supprimer ce client ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimerclient.php" ,
        {
           id_client: id_client
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}




function supprestaurant(id_rest){
var conf=confirm("vous etes sure de supprimer ce restaurant ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimerrestaurant.php" ,
        {
           id_rest:id_rest
        },

        function (data,status)

        { 
           
            location.reload(); //recherger la page 
        }

        );

}

}




function suppcoursier(id_coursier ){

var conf=confirm("vous etes sure de supprimer ce coursier ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimercoursier.php" ,
        {
           id_coursier:id_coursier 
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}





function envoicommande(id_cmd){

var conf=confirm("vous etes sure d'envoyer cette commande au restaurant  ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/updatecmd.php" ,
        {
           id_cmd:id_cmd 
        },

        function (data,status)
        {alert(data);
           // location.reload(); //recherger la page 
        }

        );

}

}


function envoicmd(id_cmd){

   //enregristrement id fonction
   $("#id_cmd_hidden").val(id_cmd);

$.post("model/getcmd.php",

{
id_cmd:id_cmd

},

function (data,status){

    var commande = JSON.parse(data);
     $("#update").val(commande.date_cmd);

   
}


    );
$("#coursier").modal("show");



}




function updatecmd(){

    

  var id_coursier=$("#addid_coursier").val();
    var id_cmd= $("#id_cmd_hidden").val();


    $.post("model/envoyercoursier.php",

       {id_cmd:id_cmd,
        id_coursier:id_coursier
       



       } ,
       function (data,status){alert(data);

   // location.reload();
});

}


function controlercmd(id_cmd){

   //enregristrement id fonction
   $("#id_cmd_hidden").val(id_cmd);

$.post("model/getcmdsui.php",

{
id_cmd:id_cmd

},

function (data,status){alert(data);

    var commande = JSON.parse(data);
     $("#update").val(commande.date_cmd);

   
}


    );
$("#coursier").modal("show");



}


        



function updatecmdsui(){

    

  var id_coursier=$("#addid_coursier").val();
    var id_cmd= $("#id_cmd_hidden").val();


    $.post("model/controlercmd.php",

       {id_cmd:id_cmd,
        id_coursier:id_coursier
       



       } ,
       function (data,status){alert(data);

    location.reload();
});

}






function suppmessage(id_contact){

var conf=confirm("vous etes sure de supprimer ce message... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimermsg.php" ,
        {
           id_contact: id_contact
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}


























































$(function(){

    var ul = $('#upload ul');

    $('#drop a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {

            var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
                }

                tpl.fadeOut(function(){
                    tpl.remove();
                });

            });

            // Automatically upload the file once it is added to the queue
            var jqXHR = data.submit();
        },

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();

            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });


    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

});