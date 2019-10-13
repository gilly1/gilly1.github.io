/* =================================
------------------------------------
	Photo Gallery HTML Template
	Version: 1.0
 ------------------------------------
 ====================================*/


'use strict';


$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {
	/*------------------
		Navigation
	--------------------*/
	$('.nav-switch-warp').on('click', function() {
		$('.header-section, .nav-switch').toggleClass('active');
		$('.main-warp').toggleClass('overflow-hidden');
	});


	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});




	/*------------------
		Hero Slider
	--------------------*/
	var hero_s = $(".hero-slider");
    hero_s.owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: false,
        animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
        navText: ['<img src="./img/angle-left-w.png" alt="">', '<img src="./img/angle-rignt.png" alt="">'],
        smartSpeed: 1200,
        autoHeight: false,
		startPosition: 'URLHash',
        mouseDrag: false,
        onInitialized: function() {
        	var a = this.items().length;
        	if(a < 10){
            	$("#snh-1").html("<span>01" + "</span>/0" + a);
       		} else{
       			$("#snh-1").html("<span>01" + "</span>/" + a);
       		}
        }
    }).on("changed.owl.carousel", function(a) {
        var b = --a.item.index, a = a.item.count;
        if(a < 10){
        	$("#snh-1").html("<span>0" + ( 1 > b ? b + a : b > a ? b - a : b) + "</span>/0" + a);
    	} else{
    		$("#snh-1").html("<span> "+ (1 > b ? b + a : b > a ? b - a : b) + "</span>/" + a);
    	}
    });



})(jQuery);
