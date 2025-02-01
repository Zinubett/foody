
function accepter(id_cmd){

var conf=confirm("vous etes sure d'accepter cette commande ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/acceptercmd.php" ,
        {
           id_cmd: id_cmd
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}
function cloturer(id_cmd){

var conf=confirm("vous etes sure de clôturer cette commande ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/cloturercmdd.php" ,
        {
           id_cmd: id_cmd
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}


function refuser(id_cmd){

var conf=confirm("vous etes sure de refuser cette commande ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/refusercmdd.php" ,
        {
           id_cmd: id_cmd
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}







