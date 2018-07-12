/***************************************************
 * Copyright (c) 2018 Peter Joiner — AKK IT, Inc. *
 ***************************************************/

$(document).ready(run);

function run() {

    var MENU_HEIGHT = $(".navbar").first().innerHeight() + parseInt($(".navbar").first().css("margin-top")) + parseInt($(".navbar").first().css("margin-bottom")) + parseInt($(".navbar").first().css("padding-top")) + parseInt($(".navbar").first().css("padding-bottom"));
    var SCROLL_TIME = 1000;
    var TOTOP_BGCOLOR = $("#toTop").css("background-color");
    var TOTOP_COLOR = $("#toTop").css("color");
    var SELECT_FORM_ITEM_COLOR = "#495057";
    var carousel = $("#alpha-slider");
    var carouselImages = $("#alpha-slider img");
    var carouselCaptions = $("#alpha-slider .alpha-slider-caption");
    var aktCarouselImage = 0;
    var aktCarouselZIndex = 20000;
    var carouselClickEnabled = true;
    var dataInterval = typeof $(carousel).attr("data-interval") !== 'undefined' ? $(carousel).attr("data-interval") : 5000;
    var carouselTimer = setTimeout(carouselValt, dataInterval);
    var wb_img_count = 0;
    var OFFCANVAS_MENU_WIDTH = 320;
    
    /* ----------------------------
     *  input file change to image
     * ---------------------------- */

    $(".image-for-input").each(function() {
        $(this).hide();
        $(this).siblings("img").on("click", function() {
            $(this).siblings("input").click();
        });
    });
    
    $("[type=file]").on("change", function() {
        var id = $(this).attr("id");
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#"+id).siblings("img").attr("src", e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    /* ------------------------------
     *  select form item placeholder
     * ------------------------------ */

    $("select").each(function () {
        var title = $(this).attr("title");
        if (typeof title !== typeof undefined && title !== false) {
            $(this).prepend('<option value="">'+title+'</option>');
            $(this).attr("required", "required");
            $(this).children().not($(this).children().first()).css("color", SELECT_FORM_ITEM_COLOR);
            $(this).children().first().hide();
            $(this).children().first().attr("selected", "selected");
        }
    });

    $("select").on("change", function () {
        $(this).css("color", SELECT_FORM_ITEM_COLOR);
    });

    /* ---------
     *  rolling
     * --------- */

    $(".rolling").click(menuClick);

    function menuClick(event) {
        event.preventDefault();
        var id = $(this).attr("href");
        $("html, body").animate({"scrollTop": $(id).offset().top - MENU_HEIGHT}, SCROLL_TIME);
        $(".navbar .collapse").collapse('hide');
    }

    /* -------
     *  toTop
     * ------- */

    $("#toTop").append('<div>');
    $("#toTop div").css({
        "border-left": "solid 8px " + TOTOP_BGCOLOR,
        "border-right": "solid 8px " + TOTOP_BGCOLOR,
        "border-bottom": "solid 15px " + TOTOP_COLOR,
        "width": 0
    });
    $("#toTop").css({
        "background-color": TOTOP_BGCOLOR,
        "padding": "13px",
        "position": "fixed",
        "right": "50px",
        "bottom": "50px",
        "cursor": "pointer",
        "display": "none",
        "z-index": 30000
    });

    toTopSetup();
    $(window).scroll(toTopSetup);
    $(window).resize(toTopSetup);
    $("#toTop").click(gotoTop);

    function toTopSetup() {
        $(window).scrollTop() > 100 ? $("#toTop").fadeIn() : $("#toTop").fadeOut();
    }

    function gotoTop() {
        $("html, body").animate({"scrollTop": 0}, SCROLL_TIME);
    }

    /* ------------
     *  hover-zoom
     * ------------ */

    $('.hover-zoom img').css({
        'float': 'left',
        'transition': 'all 0.5s'
    });
    $('head').append('<style>.hover-zoom img:hover {transform: scale(1.2)}');
    $('.hover-zoom img').wrap('<div class="hover-zoom-box">');
    $('.hover-zoom-box').css('overflow', 'hidden');

    /* --------------
     *  Alpha Slider
     * -------------- */

    carousel.css({
        "overflow": "hidden",
        "position": "relative"
    });

    carouselImages.css({
        "position": "absolute",
        "left": 0,
        "width": "100%",
        "z-index": aktCarouselZIndex
    });

    carouselCaptions.css({
        "position": "absolute",
        "width": "60%",
        "margin": "0 20%",
        "z-index": aktCarouselZIndex - 100
    });
    
    // indikátor gombok
    for (i=0; i<carouselImages.length; i++) {
        carousel.append('<div class="carouselIndicator-item">');
        $("#alpha-slider div").last().prop("azon", i);
    }
    $("#alpha-slider .carouselIndicator-item").wrapAll('<div id="carouselIndicator">');

    var carouselIndicator = $("#carouselIndicator");
    var carouserIndicatorItems = $("#carouselIndicator .carouselIndicator-item");

    carouselIndicator.css({
        "position": "relative",
        "float": "left",
        "z-index": aktCarouselZIndex + 70000
    });
    
    carouserIndicatorItems.css({
        "width": 16,
        "height": 16,
        "background-color": "black",
        "float": "left",
        "margin": "0 10px",
        "border-radius": "50%",
        "cursor": "pointer"
    });
    
    carouserIndicatorItems.first().css({
        "background-color": "white"
    });
    
    // nyilak
    carousel.append('<div id="carouselLeftBtn">');
    carousel.append('<div id="carouselRightBtn">');
    var carouselLeftBtn = $("#carouselLeftBtn");
    var carouselRightBtn = $("#carouselRightBtn");
    
    $("#carouselLeftBtn, #carouselRightBtn").css({
        "cursor": "pointer",
        "position": "relative",
        "width": 0,
        "border-top": "solid 10px transparent",
        "border-bottom": "solid 10px transparent",
        "z-index": aktCarouselZIndex + 70000
    });
    
    carouselLeftBtn.css({
        "border-right": "solid 18px black"
    });

    carouselRightBtn.css({
        "border-left": "solid 18px black"
    });

    carouselImages.not(carouselImages.first()).css("opacity", 0); // csak az első kép látszódik
    carouselCaptions.first().css("z-index", aktCarouselZIndex);

    atmeretez();
    $(window).on("resize", atmeretez);
    
    carouselLeftBtn.on("click", function() {
        if (carouselClickEnabled) {
            aktCarouselImage -= 2;
            carouselValt();
        }
    });
    
    carouselRightBtn.on("click", function() {
        if (carouselClickEnabled) {
            carouselValt();
        }
    });
    
    carouserIndicatorItems.on("click", function() {
        if (carouselClickEnabled && $(this).prop("azon") !== aktCarouselImage) {
            aktCarouselImage = $(this).prop("azon") - 1;
            carouselValt();
        }
    });
    
    function atmeretez() {
        carousel.css("height", carouselImages.css("height"));
        carouselCaptions.each(function() {
            $(this).css("margin-top", (parseInt(carousel.css("height")) - parseInt($(this).css("height"))) / 2);
        });
        carouselLeftBtn.css({
            "left": 20,
            "top": (parseInt(carousel.css("height")) - parseInt(carouselLeftBtn.css("height"))) / 2
        });
        carouselRightBtn.css({
            "left": parseInt(carousel.css("width")) - 40,
            "top": (parseInt(carousel.css("height")) - parseInt(carouselRightBtn.css("height"))) / 2 - 20
        });
        carouselIndicator.css({
            "left": (parseInt(carousel.css("width")) - parseInt(carouselIndicator.css("width"))) / 2,
            "top": parseInt(carousel.css("height")) - 40
        });
    }
    
    function carouselValt() {
        carouselClickEnabled = false;
        clearTimeout(carouselTimer);
        carouselImages.stop(true).clearQueue();
        aktCarouselImage++;
        aktCarouselZIndex+=2;
        if (aktCarouselImage === carouselImages.length) {
            aktCarouselImage = 0;
        } else
        if (aktCarouselImage < 0) {
            aktCarouselImage = carouselImages.length - 1;
        }
        carouserIndicatorItems.css("background-color", "black");
        carouserIndicatorItems.eq(aktCarouselImage).css("background-color", "white");
        carouselImages.eq(aktCarouselImage).css({
            "opacity": 0,
            "z-index": aktCarouselZIndex
        }).animate({"opacity": 1}, 2000, function() {
            carouselClickEnabled = true;
            carouselCaptions.eq(aktCarouselImage).css({
                "top": -(parseInt(carousel.css("height")) - parseInt(carouselCaptions.eq(aktCarouselImage).css("height"))) / 2 - parseInt(carouselCaptions.eq(aktCarouselImage).css("height")),
                "z-index": aktCarouselZIndex+1
            }).animate({"top": 0}, 1000);

        }).delay(dataInterval - 2000).queue(carouselValt);
    }

    /* ----------
     *  Whitebox
     * ---------- */

    $(".wb-link").on("click", function (e) {
        e.preventDefault();
        var wb_linkId = $(this);
        $("body").css("overflow", "hidden");
        $("body script").first().before('<div class="wb-bg">');
        $(".wb-bg").animate({
            "opacity": 1
        }, 1000, function () {
            var wb_sizes = [];
            var wb_thumbnail2_width = 0;

            $(".wb-bg").after('<a class="text-white display-5">&times;</a>');
            $(".wb-bg+a").after('<div class="container"><div class="wb-container">');
            $('.wb-container').append('<img id="wb-lg-img" src="' + $(wb_linkId).attr("href") + '" alt="">');
            var i = 0;
            
            var wb_timer0 = setInterval(function () {
                if ($("#wb-lg-img").width() > 0) {
                    clearInterval(wb_timer0);
                    $('.wb-container').append('<p id="wb-info" class="text-left">');
                    $('.wb-container').append('<div class="wb-thumbnail1">');
                    $('.wb-thumbnail1').append('<div class="wb-thumbnail2">');
                    var groupId = $(wb_linkId).attr("data-whitebox");
                    $('.wb-thumbnail2').html($(groupId).html());
                    // find the clicked picture
                    while (i < $(".wb-thumbnail2 img").length && $(".wb-thumbnail2 img").eq(i).parent().attr("href") !== $(wb_linkId).attr("href")) {
                        i++;
                    }
                    $(".wb-thumbnail2 img").eq(i).css("border", "solid 5px black");
                    var wb_timer = setInterval(function () {
                        var allImagesLoaded = true;
                        $(".wb-thumbnail2 img").each(function () {
                            if ($(this).width() === 0) {
                                allImagesLoaded = false;
                            }
                        });
                        if (allImagesLoaded) {
                            clearInterval(wb_timer);
                            wb_setup();
                            wb_resize();
                        }
                    }, 10);
                }
            });

            function wb_setup() {
                wb_img_count = 0;
                $(".wb-thumbnail2 img").each(function () {
                    wb_sizes[wb_sizes.length] = wb_thumbnail2_width;
                    wb_thumbnail2_width += $(this).width() + 10;
                    wb_img_count++;
                });
                $(".wb-thumbnail2").css("width", wb_thumbnail2_width + 25);
                $("#wb-lg-img").css({
                    "border": "solid 10px white"
                });
                $("#wb-info").css({
                    "background-color": "white",
                    "border": "solid 10px white",
                    "border-top": "none"
                });
                $("#wb-info").html('<div class="col text-truncate px-0">'+(i+1)+'/'+wb_img_count+' <span class="font-weight-bold">'+$(".wb-thumbnail2 img").eq(i).attr("title")+'</span></div>');

                $("#wb-info").animate({"opacity": 1}, 500);
                $("#wb-lg-img").animate({"opacity": 1}, 500);
                $(".wb-thumbnail1").animate({"opacity": 1}, 500, function () {
                    $(".wb-thumbnail1").animate({"scrollLeft": wb_sizes[i] - $(".container").width() / 2 + $(".wb-thumbnail2 img").eq(i).width() / 2}, 1000);
                });
                
                $(".wb-thumbnail2 a").on("click", function (e) {
                    e.preventDefault();
                    var link = $(this);
                    // find the clicked picture
                    var i = 0;
                    while (i < $(".wb-thumbnail2 img").length && $(".wb-thumbnail2 img").eq(i).parent().attr("href") !== $(this).attr("href")) {
                        i++;
                    }
                    $(".wb-thumbnail1").animate({"scrollLeft": wb_sizes[i] - $(".container").width() / 2 + $(".wb-thumbnail2 img").eq(i).width() / 2}, 1000);
                    $("#wb-info").animate({"opacity": 0}, 500);
                    $("#wb-lg-img").animate({"opacity": 0}, 500, function () {
                        var tmp_image = $(this);
                        $(tmp_image).attr("src", "");
                        $(tmp_image).attr("src", $(link).attr("href"));

                        var wb_timer = setInterval(function () {
                            if (tmp_image.width() > 0) {
                                clearInterval(wb_timer);
                                $(tmp_image).animate({"opacity": 1}, 500);
                                $("#wb-info").html('<div class="col text-truncate px-0">'+(i+1)+'/'+wb_img_count+' <span class="font-weight-bold">'+$(".wb-thumbnail2 img").eq(i).attr("title")+'</span></div>');
                                $("#wb-info").css("max-width", $("#wb-lg-img").width() + 20);
                                $("#wb-info").animate({"opacity": 1}, 500);
                            }
                        });
                        
                    });
                    $(".wb-thumbnail2 img").css("border", "solid 5px white");
                    $(this).children().css("border", "solid 5px black");
                });

            }

            $(window).on("resize", wb_resize);

            function wb_resize() {
                $(".wb-container").css("width", $(".container").width());
                if (wb_thumbnail2_width < $(".container").width()) {
                    $(".wb-thumbnail1").css({
                        "width": wb_thumbnail2_width + 25,
                        "left": ($(".wb-bg").width() - $(".wb-thumbnail1").width()) / 2
                    });
                } else {
                    $(".wb-thumbnail1").css({
                        "width": $(".container").width()
                    });
                }
                $("#wb-lg-img").css({
                    "max-width": $(".container").width(),
                    "max-height": $(window).innerHeight() - 250
                });
                $("#wb-info").css({
                    "max-width": $("#wb-lg-img").width() + 20,
                    "margin": "auto"
                });
            }

            $(".wb-bg, .wb-bg+a").on("click", function () {
                var wb_container_parent = $(".wb-container").parent();
                $(".wb-bg+a").remove();
                $(".wb-container, .wb-bg").animate({
                    "opacity": 0
                }, 1000, function () {
                    $(this).remove();
                });
                $(wb_container_parent).remove();
                $("body").css("overflow", "auto");
            });
        });
    });

    /* -----------------
     *  Off Canvas Menu
     * ----------------- */

    $(".offcanvas-main").css({
        "position": "relative"
    }).parent().css({
        "overflow-x": "hidden"
    });

    $(".offcanvas-container, .offcanvas-container-fixed").css({
        "float": "left"
    });

    $(".offcanvas-menu").css({
        "position": "fixed",
        "width": OFFCANVAS_MENU_WIDTH,
        "height": "100%",
        "right": -OFFCANVAS_MENU_WIDTH,
        "z-index": 10000
    });

    setOffCanvasMenu();
    $(window).on("resize", setOffCanvasMenu);
    $(".offcanvas-menu .rolling").on("click", function () {
        $(".offcanvas-main").stop().animate({"left": 0}, 500);
        $(".offcanvas-menu").stop().animate({"right": -OFFCANVAS_MENU_WIDTH}, 500);
    });

    $(".offcanvas-toggler").css({
        "background-color": "transparent",
        "border": "solid 1px transparent",
        "outline": "none"
    }).on("click", function () {
        if (parseInt($(".offcanvas-menu").css("right")) < 0) {
            if ($(".offcanvas-container").length === 1) {
                $(".offcanvas-main").stop().animate({"left": -OFFCANVAS_MENU_WIDTH}, 500);
            }
            $(".offcanvas-menu").stop().animate({"right": 0}, 500);
        } else {
            if ($(".offcanvas-container").length === 1) {
                $(".offcanvas-main").stop().animate({"left": 0}, 500);
            }
            $(".offcanvas-menu").stop().animate({"right": -OFFCANVAS_MENU_WIDTH}, 500);
        }
    });

    function setOffCanvasMenu() {
        $(".offcanvas-main").css({
            "width": $(window).width() + OFFCANVAS_MENU_WIDTH
        });
        $(".offcanvas-container, .offcanvas-container-fixed").css({
            "width": $(window).width()
        });
    }

}
