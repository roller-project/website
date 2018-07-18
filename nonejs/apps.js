import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'animate.css';
//import 'socket.io-client';
//import 'moment';
$.fn.extend({
  animateCss: function(animationName, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));

    this.addClass('animated ' + animationName).one(animationEnd, function() {
      //$(this).removeClass('animated ' + animationName);

      if (typeof callback === 'function') callback();
    });

    return this;
  },
  animateSroll : function(){
    var $window = $(window);
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    
    


    $(this).each(function(k, v){
      var $element = $(this);
      if(!$element.attr('data-in')) return;
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
        if($element.hasClass("animated") == false){
          $element.animateCss( $element.attr('data-in'));
        }
      } else {
        if(window_top_position < 50){
          $element.removeClass("animated " + $element.attr('data-in'));
        }
      }
     
    });
    
  },
  animatePlay : function(){
    $(this).each(function(k, v){
      var $element = $(this);
      if(!$element.attr('data-in')) return;
      $element.animateCss( $element.attr('data-in'));
    });
  },
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
            items.html('<img src="'+data+'" class="w-100">');
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
          
        });
       
    });
  }

  
  $('[play-eff]').animatePlay();
  
  $(window).on('scroll resize', function(){
    $("[sroll-data]").animateSroll();
  });
  
});