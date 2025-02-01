function inscrire(){
    var nom=$("#addnom").val();
    var prenom=$("#addprenom").val();
    var telephone=$("#addtele").val();
    var numcin=$("#addcin").val();
    var login=$("#addemail").val();
    var mp=$("#addmp").val();
    var adresse=$("#addadresse").val();
   
    


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
//location.reload();

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
            //location.reload();

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
           // location.reload();

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
    var nb=100;
     $.each(JSON.parse(data), function(idx, obj) {
      

                 $("#restaurant").append(
                                         " <a href='' class='item-dishes' data-aos='fade-right' data-aos-delay='"+nb+"'>"+
                                            "<div class='text'>"+
                                              "<p class='dishes-price'>"+obj.nom_rest+"</p>"+
                                              "<h2 class='dishes-heading'>ADRESSE :"+ obj.adresse_rest+"<br>TELEPHONE : "+obj.telefonne_rest+"</h2>"+
                                            "</div>"+
                                            "<img src='img/dishes_1.jpg' alt='' class='img-fluid'>"+
                                          "</a>"
                                        
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

                 
      
                "<h3>Libilé:"+obj.nom_promo+"</h3>"+
                "<p>Déscription:"+obj.description_promo+"</p>"+
                "<p class='text-primary h3'>Prix unitiale:"+obj.prix_unitiale+"</p>"+
                "<p class='text-primary h3'>Prix promotion:"+obj.prix_promo+"</p>"+
                "<p>Date début:"+obj.date_debut+"</p>"+
                "<p>Date fin:"+obj.date_fin+"</p>"

     

        
                                        
                                        );


            }); 
    
    }

);}