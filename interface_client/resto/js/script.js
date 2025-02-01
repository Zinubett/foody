

function insertmenu(){
    var Libelle=$("#addlibile").val();
    var Prix=$("#addprix").val();
    var Description=$("#adddescription").val();
    var Images=$("#addimage").val();
   
    



    $.post("model/insertmenu.php",
        {        
         Libelle:Libelle,
         Prix:Prix,
         Description:Description,
         Images:Images
        
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);

           }

);
}

function ajouterpromotion(){
    var Libelle=$("#addlibele").val();
    var Prix_unitiale=$("#addprixinit").val();
    var Prix_promo=$("#addprixpromo").val();
    var Description=$("#adddescription").val();
    var date_debut=$("#adddatedebut").val();
    var date_fin=$("#adddatefin").val();
    var Images=$("#addimage").val();
   
    



    $.post("model/ajouterpromotion.php",
        {        
         Libelle:Libelle,
         Prix_unitiale:Prix_unitiale,
         Prix_promo:Prix_promo,
         Description:Description,
         date_debut:date_debut,
         date_fin:date_fin,
         Images:Images
        
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);

           }

);
}



function getpromotion(id_promo){
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





function modifierpromotion(){

    var nom_promo = $("#uplibele").val();
    var prix_unitiale =$("#upprixinit").val();
    var prix_promo= $("#upprixpromo").val();
    var description_promo= $("#updescription").val();
    var date_debut= $("#updatedebut").val();
    var date_fin= $("#updatefin").val();
    var image= $("#upimage").val();


    var id_promotion= $("#id_promo_hidden").val();

    $.post("model/uppromotion.php",

       {nom_promo:nom_promo,
        prix_unitiale:prix_unitiale,
        prix_promo:prix_promo,
        description_promo:description_promo,
        date_debut:date_debut,
        date_fin:date_fin,
        image:image,
        id_promotion:id_promotion



       } ,
       function (data,status){alert(data);

    location.reload();
}





        );
}



function supppromotion(id_promo){

var conf=confirm("vous etes sure de supprimer le promotion ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimerpromotion.php" ,
        {
           id_promo: id_promo
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}




function suppmenujour(id_menu){

var conf=confirm("vous etes sure de supprimer le menu  ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimermenujour.php" ,
        {
           id_menu:id_menu
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}



function getmenu(id_menu){
    $("#id_menu_hidden").val(id_menu);

$.post("model/getmenu.php",
{

  id_menu:id_menu
},
 function(data,status)
 {
  var menu=JSON.parse(data);
        $("#uplibele").val(menu.nom_repas);
     $("#upprix").val(menu.prix_unitaire);
   
     $("#updescription").val(menu.description);
    
      $("#upimage").val(menu.image);

 } );
     
$("#modifiermenu").modal("show");
}



function modifiermenu(){

    var nom_menu = $("#uplibele").val();
    var prix_unitaire =$("#upprixunit").val();
   
    var description= $("#updescription").val();
    
    var image= $("#upimage").val();


    var id_menu= $("#id_menu_hidden").val();

    $.post("model/updatemenu.php",

       {nom_menu:nom_menu,
        prix_unitaire:prix_unitaire,
        description:description,
        image:image,
        id_menu:id_menu



       } ,
       function (data,status){//alert(data);

    location.reload();

}
);
}


function suppmenu(id_menu){

var conf=confirm("vous etes sure de supprimer le menu  ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimermenu.php" ,
        {
           id_menu:id_menu
        },

        function (data,status)
        {//lert(data);
            location.reload(); //recherger la page 
        }

        );

}

}




function getmenujour(id_menu){
  

var conf=confirm("vous etes sure d'ajouter au menu de jour  ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/ajoutermenujour.php" ,
        {
           id_menu:id_menu
        },

        function (data,status)
        {//lert(data);
            location.reload(); //recherger la page 
        }

        );

}

}



function traiter(id_cmd){

var conf=confirm("vous etes sure de traiter cette commande ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/traiter.php" ,
        {
           id_cmd: id_cmd
        },

        function (data,status)
        {alert(data);
            //location.reload(); //recherger la page 
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