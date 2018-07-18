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


$.fn.extend({
  jsonToHTML: function(data) {

      if(!data) return;
       var tag = this.prop('tagName');
       var items = this;
        if(tag == "A"){
           
            items.attr("href",data);
        }

        if(tag == "IMG"){
            
            items.attr("src",data);
        }

        if(tag == "P" || tag == "B" || tag == "STRONG" || tag == "I" || tag == "EM" || tag == "DIV" || tag == "H1" || tag == "H2" || tag == "H3" || tag == "H4" || tag == "H5" || tag == "H6" || tag == "H7"){
          if(items.hasClass("progress-bar")){
            items.attr("style","width:"+data);
          }else if(items.hasClass("background")){
             items.css("background-image","url("+data+");");
          }else if(items.hasClass("append-img")){
            items.html('<img src="'+data+'" class="'+items.attr("[append-class]")+'">');
          }else{
            items.html(data);
          }
        }
        return;
  }
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
         
          items.jsonToHTML(vv);
          
          if(kk == "item"){
            var itemFetch = $('[data-json="'+k+'"] [json-item]');
            
            if(itemFetch.length == 0) return;

            $.each(vv, function(kItem, vItem){
               
                var pateItem =itemFetch.find('[json-item-data]:eq('+kItem+')');
                if(pateItem.length == 0) return;
                $.each(vItem, function(rItem, rvItem){
                    if(!rvItem) return;
                    var rS = pateItem.find('[item-'+rItem+']');
                    rS.jsonToHTML(rvItem);
                });
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