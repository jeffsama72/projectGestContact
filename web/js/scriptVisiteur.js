$(document).ready(function() {  // La fonction cherche à savoir si tout le HTML a été chargé avant de se lancer

// code pour le slide dans la vue de la page visiteur pour l'inscription permettant de faire défiler différent formulaire 

var compteur = 0; 
var nbContent = $('.slider ul li').length;
var largeurUl = nbContent * 1170; 
$('.slider ul').css('width',largeurUl);
compteurtotal = -(largeurUl -  1170);


$('.suivant').click(function(event){  

  event.preventDefault();
  //compteur met à jour le margin left à appliquer
  compteur = compteur -  1170; 
  
  //applique la règle du margin avec la variable compteur. 
  $('.slider ul').css('margin-left',compteur+'px');
});

$('.precedent').click(function(event){

    event.preventDefault();
    // ajoute des pixels pour faire revenir en arrière le slide
    compteur = compteur +  1170; 

    $('.slider ul').css('margin-left',compteur+'px');
});
});

$(function() {
  
  var checkbox = $("#trigger");
  var hidden = $("#hidden");

  hidden.hide();
  
  checkbox.change(function() {

    if (checkbox.is(':checked')) {

      hidden.show();
      $('.rowPad').removeClass('pad');

    } else {

      hidden.hide();
      $('.rowPad').addClass('pad');

    }
  });
});

