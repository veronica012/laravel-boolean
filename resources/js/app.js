require('./bootstrap');
var $ = require('jquery');

$('.domanda').click(function(){

    if($(this).next('.risposta').hasClass('aperta')) {

        $(this).next('.risposta').removeClass('aperta;')

    } else {
        $('.risposta').removeClass('aperta');

        $(this).next('.risposta').addClass('aperta');
    }
});
//event target se volessi chiudere le risposte cliccando su un qualsiasi punto della pagina
$(document).click(function(event) {
      var target = $(event.target);
      if(!target.hasClass('domanda') && !target.hasClass('risposta')){
          $('.risposta').removeClass('aperta');
      }
 });
