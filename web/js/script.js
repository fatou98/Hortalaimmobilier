$(document).ready(function(){
    $(".connexion").hide();
    $(".div1").fadeOut();
   $("#option").hide();

    $('#connexionbuton').on("click",function(){
            $(".connexion").show();
    $("#myCarousel").hide();
    $(".recherche").hide();
    });
    $('#accueil').on("click",function(){
            $(".connexion").hide();
    $("#myCarousel").show();
    $(".recherche").show();
    });
   $(window).on("scroll",function(){
      if($(this).scrollTop()>250){$(".div1").fadeIn(600);}

    });
$('input[name=optradio]').on("change",function(){
   if($(" #optradio").is(':checked') ){
    $("#save").removeAttr("disabled");
} 
})
 $('#plus').on("click",function(){
    $("#option").show();
    });
 $('#accueil').on("click",function(){
 $(".connexion").hide();
    $("#myCarousel").show();
    $(".recherche").show();
      
     $('#listebientable').dataTable({
      "iDisplayLength":5,
      "language": {
    "sProcessing":     "Traitement en cours...",
    "sSearch":         "Rechercher&nbsp;:",
    "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
    "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
    "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
    "sInfoPostFix":    "",
    "sLoadingRecords": "Chargement en cours...",
    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
    "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
    "oPaginate": {
        "sFirst":      "Premier",
        "sPrevious":   "Pr&eacute;c&eacute;dent",
        "sNext":       "Suivant",
        "sLast":       "Dernier"
    },
    "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
    }
}
  });
           $("#article").load("{{path('listeadmin')}}");

  /*  $('#type').on("click",function(){
        $("#article").load("{{path('listetype')}}");
    });
     $('#localite').on("click",function(){
        $("#article").load("{{path('listelocalite')}}");
    });
*/

});});