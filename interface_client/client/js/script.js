function inscrire(){
    var nom=$("#addnom").val();
    var prenom=$("#addprenom").val();
    var telephone=$("#addtele").val();
    var numcin=$("#addcin").val();
    var login=$("#addadresse").val();
    var mp=$("#addemail").val();
    var adresse=$("#addmp").val();
   
    


    $.post("model/demmande.php",
        {  
         nom:nom,      
         prenom:prenom,
         telephone:telephone,
         numcin:numcin,
         login:login,
         mp:mp,
         adresse:adresse
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);


           }

);
}
function inscrir(){
    var nom=$("#addnomr").val();
    var adresse=$("#addadresser").val();
    var telephone=$("#addteler").val();
    var facebook=$("#addfacebookr").val();
    var login=$("#addemailr").val();
    var mp=$("#addmpr").val();
   
    


    $.post("model/inscrire.php",
        {  
         nom:nom,      
         adresse:adresse,
         telephone:telephone,
         facebook:facebook,
         login:login,
         mp:mp
         
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);
            

           }

);
}

function envoyermsg(){
    var nom=$("#addname").val();
    var telephone=$("#addphone").val();
    var email=$("#addemailm").val();
    var message=$("#addmessage").val();
    
   
    


    $.post("model/envoyermsg.php",
        {  
         nom:nom,      
         telephone:telephone,
         email:email,
         message:message
         
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);
            

           }

);
}






function listerestaurant(){

    
  

   $.post("model/listerestaurant.php",
    {
        
        id_rest:1
        

    },
    function(data,status)

    { 
    
     $.each(JSON.parse(data), function(idx, obj) {
       

                 $("#restaurant").append(
                                         " <div class='item-dishes' style='width: 500px; height: 500px;margin-top: 100px;' >"+
                                            "<div class='text'>"+
                                              "<p class='dishes-price'>"+obj.nom_rest+"</p>"+
                                              "<h2 class='dishes-heading'>ADRESSE :"+ obj.adresse_rest+"<br>TELEPHONE : "+obj.telefonne_rest+"</h2>"+
                                            "<div class='col-md-4'>"+
                                                "</div>"+
                                            "</div>"+
                                             
                                            "<img src='img/dishes_1.jpg' alt='' class='img-fluid'>"+
                                          "</div>"
                                        
                                        );


            }); 
    
    }

);}



function listepromotion(){

    
  

   $.post("model/listepromotion.php",
    {
        
        id_promo:1
        

    },
    function(data,status)

    { 
   
     $.each(JSON.parse(data), function(idx, obj) {
      

                 $("#promotion").append(

                    "<div class='col-md-6'>"+
            "<div class='sched d-block d-lg-flex'>"+
              "<div class='bg-image order-2' style='background-image: url('img/dishes_4.jpg');' data-aos='fade'></div>"+
              "<div class='text order-1'>"+
                "<h3>"+obj.nom_promo+"</h3>"+
                "<p>"+obj.description_promo+"</p>"+
                "<p class='text-primary h3'> "+obj.prix_promo+" TND</p>"+
              "</div>"+
              
            "</div>"+

            

          "</div>"

                 
            

        
                                        
                                        );


            }); 
    
    }

);}



function listerestaurantt(){

    
  

   $.post("model/listerestaurant.php",
    {
        
        id_rest:1
        

    },
    function(data,status)

    { 
    
     $.each(JSON.parse(data), function(idx, obj) {
       

                 $("#listerestaurant").append( 

                    
     "<button type='button' class='btn btn-link btn-sm' style='font-size: 40px; width: 100%;' onclick='getmenu("+obj.id_rest+")' >"+obj.nom_rest+"</button>"+
                        "<br>"
            );


            }); 
    
    }

);}





function getmenu(id_rest){
    $("#id_rest_hidden").val(id_rest);

$.post("model/getmenu.php",
{

  id_rest:id_rest
},
 function(data,status)
 {  
 

  var mydata = JSON.parse(data);

   $("#IDRESTAURANT").val(mydata.restaurant);

         $.each(mydata, function(idx, obj) { 
       

                 $("#listemenu").append("<tr>"+
      
                                             "<td>"+obj.nom_repas+"</td>"+
                                              "<td>"+obj.prix_unitaire+"</td>"+
                                             "<td>"+obj.description+"</td>"+
                                             "<td><button type='button' class='btn btn-primary btn-flat' onclick='ajouteraupanier("+obj.id_menu+")'><i class='fa fa-shopping-cart'></i></button></td>"+ 
                                           "</tr>"
          
                       );
  


            });   }


        );
     
$("#getmenu").modal("show");
}


function ajouteraupanier(id_menu){
    $("#id_menu").val(id_menu);

$.post("model/ajoutercontinue.php",
{

  id_menu:id_menu
},
 function(data,status)
 {
 


 } );
     
}





function consulterpanier(){

$.post("model/panier.php",
{

  id_panier:1
},
 function(data,status)
 {  
       
      


var total=0;
  var mydata = JSON.parse(data);

   $("#hiddenclient").val(mydata.id_client);
  

         $.each(mydata, function(idx, obj) {  total= total + (obj.quantite * obj.prix_unitaire);
       

                 $("#panier").append("<tr>"+
      
                                             "<td>"+obj.nom_repas+"</td>"+
                                             "<td>"+obj.prix_unitaire+"</td>"+
                                              "<td>"+obj.quantite+"</td>"+
                                              "<td>"+obj.quantite * obj.prix_unitaire+"</td>"+
                                     "<td><button type='button' class='btn btn-info ' style='margin-right:20px;' onclick='getquantiter("+obj.id_continue+")'><i class='fa fa-plus'></i></button>"+ 
                                     "<button type='button' class='btn btn-danger' onclick='supprimercontinue("+obj.id_continue+")'><i class='fa fa-trash-o'></i></button></td>"+ 

                                              
                                          "</tr>"+
                                          "<tr>"+
                                          "<td></td>"+
                                          "<td></td>"+
                                          "<td>Total=</td>"+
                                          "<td>"+total+"</td>"+

                                          

                                          "</tr>"

          
                       );
  
                      

            }); 

                  


              }


        );
     
$("#consulterpanier").modal("show");
}



function getquantiter(id_continue){
    $("#id_continue_hidden").val(id_continue);

$.post("model/getquantiter.php",
{

  id_continue:id_continue
},
 function(data,status)
 {
  var quantiter =JSON.parse(data);
       $("#upquantiter").val(quantiter.quantite);


 } );
     
$("#updatquantiter").modal("show");
}



function modifierquantiter(){

    var quantite = $("#upquantiter").val();
    


    var id_continue= $("#id_continue_hidden").val();


    $.post("model/updatequantiter.php",

       {quantite:quantite,
        
        id_continue:id_continue



       } ,
       function (data,status){alert(data);

    location.reload();
}





        );
}






function supprimercontinue(id_continue){

var conf=confirm("vous etes sure de supprimer l'ordre ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimercontinue.php" ,
        {
           id_continue: id_continue
        },

        function (data,status)
        {alert(data);
        location.reload(); //recherger la page 
        }

        );

}}

function ajoutercommande(id_cmd ) {
    var datelivraison=$("#adddatelivraison").val();
    var heurelivraison=$("#addheurelivraison").val();
    var adresselivraison=$("#addadresselivraison").val();
    var telephonelivraison=$("#addtelephoneivraison").val();
    var rest =$("#IDRESTAURANT").val();
    
   
    


    $.post("model/ajoutercommande.php",
        {  
         datelivraison:datelivraison,      
         heurelivraison:heurelivraison,
         adresselivraison:adresselivraison,
         telephonelivraison:telephonelivraison,
   
         rest:rest

         
     },
           function(data,status){
            alert(data);
             location.reload();
            $("#reponse").html(data);


           }

);
}

