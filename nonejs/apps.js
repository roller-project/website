import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'animate.css';
import 'socket.io-client';
import 'moment';
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
  }
});



$(document).ready(function(){
  var jsonContents = $("#jsonContent").html();
  if(jsonContents){
    
    var jsonContent = $.parseJSON(jsonContents);
    $.each(jsonContent,function(k,v){
        $.each(v, function(kk, vv){
          var item = $('[data-json="'+k+'"] [data-json-item]:eq('+kk+')');
          item.removeClass("lock");
          $.each(vv, function(kkk, vvv){
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
            }else{
              items.html(vvv);
            }
          });
        });
    });
  }

  $('[play-eff]').animatePlay();
  
  $(window).on('scroll resize', function(){
    $("[sroll-data]").animateSroll();
  });
});