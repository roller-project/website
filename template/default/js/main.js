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




$(document).ready(function(){
  var jsonContents = $("#jsonContent2").html();
  if(jsonContents){
    
    var jsonContent = $.parseJSON(jsonContents);
    $.each(jsonContent,function(k,v){
        
        //console.log(v);
        var item = $('[data-json="'+k+'"]');
        $.each(v, function(kk, vv){
          var items = item.find("[data-"+kk+"]");
          var tag = items.prop('tagName');
          items.removeClass("lock");
          
          if(tag == "A"){
              var hf = items.attr("href");
              hf = hf.replace('{url}',vv);
              items.attr("href",hf);
          }
          if(tag == "IMG"){
              var hf = items.attr("src");
              hf = hf.replace('{url}',vv);
              items.attr("src",hf);
          }

          if(tag == "DIV" && kk == "backgroundurl"){
            var hf = items.css("background-image");
            //alert(hf);
            //hf = hf.replace('{url}',vv);
            items.css("background-image","url('"+vv+"')");
          }else if(tag == "P" || tag == "DIV" || tag == "H1" || tag == "H2" || tag == "H3" || tag == "H4" || tag == "H5" || tag == "H6" || tag == "H7"){
            items.html(vv);
          }
          if(kk == "item"){
            $.each(v.item, function(kItem, vItem){
              
            });
          }
          /*
          $.each(vv, function(kkk, vvv){
            alert(kkk);
            var items = item.find("[data-"+kkk+"]");
            if(items.prop('tagName') == "A"){
              var hf = items.attr("href");
              hf = hf.replace('{url}',vvv);
              items.attr("href",hf);
              //alert(href);

            } else if(items.prop('tagName') == "IMG"){
              var hf = items.attr("src");
              hf = hf.replace('{url}',vvv);
              items.attr("src",hf);
            } else if(kkk == "backgroundurl"){
              //items.css({"background-url","url('"+vvv+"')"});
            }else{
              items.html(vvv);
            }
          });
           */
        });
       
    });
  }
});