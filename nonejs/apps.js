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
      $(this).removeClass('animated ' + animationName);

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
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
        $element.animateCss($element.attr('data-in'));
      } else {
        $element.animateCss($element.attr('data-out'));
      }
     
    });
    
  }
});



$(document).ready(function(){
  var jsonContent = $("#jsonContent").html();
  if(jsonContent){
    var dataJson = $('[data-json]');
  }

  
  $(window).on('scroll resize', function(){
    $("[sroll-eff]").animateSroll();
  });
});