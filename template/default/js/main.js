$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open');
    $('body').toggleClass('MobiOpen')
  });
  
  /*
  $("[data-background]").each(function(){
      var item = $(this).attr("data-background");
      if(item){
        $(this).append('<div class="bgeff" style="background-image:url(\''+item+'\');"></div>');
        item = "";
      }
  });
  
*/

});




