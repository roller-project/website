$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
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

  // Set the date we're counting down to
var countDownDate = new Date("July 12, 2018 0:0:0").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("count_down").innerHTML = "<span data-date>" + days + " ngày </span><span data-hour>" + hours + " giờ </span><span data-date>"
  + minutes + " phút </span><span data-date>" + seconds + " giây </span>";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("count_down").innerHTML = "EXPIRED";
  }
}, 1000);


})




