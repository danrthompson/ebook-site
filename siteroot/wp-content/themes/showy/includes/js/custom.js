/*global jQuery:false */
jQuery(document).ready(function ($) {
	"use strict";

//This is the To top button you see on the single pages
	$('.totop').click(function () { 
	$('html, body').animate({
		scrollTop: 0
	}, 600);
	return false;
	});

//Portfolio images flip
$('.portfolio-item').hover(function(){
				$(this).addClass('flip');
			},function(){
				$(this).removeClass('flip');
			});

//Filterable portfolio container
	$container = $('#portfolio-list');
		
	$container.imagesLoaded( function(){
	$container.isotope({masonry: {
	gutterWidth: 0
	}});
	});

//This is the tooltip when hovering over the toggle used to display the filter
	$(".togglefilter").tipTip({maxWidth: "auto", edgeOffset: 10, defaultPosition: "right", fadeIn: 100});

//This is the tooltip when hovering over the toggle used to display the filter
	$(".fullportfolio").tipTip({maxWidth: "auto", edgeOffset: 10, defaultPosition: "right", fadeIn: 100});

//This is the tooltip when hovering over the toggle used to display more meta
	$(".meta-hover").tipTip({maxWidth: "auto", edgeOffset: 10, defaultPosition: "right", fadeIn: 100});
		
//This is the Responsive Menu when viewed on mobile devices
    $('.nav').mobileMenu();
    $('select.select-menu').each(function () {
        var title = $(this).attr('title');
        if ($('option:selected', this).val() !== '') { title = $('option:selected', this).text();}
        $(this)
            .css({
            'z-index': 10,
            'opacity': 0,
            '-khtml-appearance': 'none'
        })
            .after('<span class="select">' + title + '</span>')
            .change(function () {
            var val = $('option:selected', this).text();
            $(this).next().text(val);
        });
    });

	var $container = $('#portfolio-list');
	$container.isotope({
		filter: '*',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		}
	});

	$('#portfolio-filter li a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			}
		});
	return false;
	});

	var $optionSets = $('#portfolio-filter'),
	$optionLinks = $optionSets.find('a');
	 
	$optionLinks.click(function(){
		var $this = $(this);
		if ( $this.hasClass('selected') ) {
			return false;
		}
		var $optionSet = $this.parents('#portfolio-filter');
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected'); 
	});

$("#portfolio-filter").hide();
$("a.togglefilter").click(function() {
  $("#portfolio-filter").fadeToggle("1000", "linear");
return false;
});

//Added support for responsive soundcloud
    $("#wrapper").fitVids({ customSelector: "iframe[src^='http://w.soundcloud.com']"});
	
//FitVids to scale embed videos down on smaller screens
    $(".fitvid").fitVids();

//This is the flexslider used in the gallery post formats
    $(".flexslider").flexslider({
        animation: 'slide',
        touch: true,
        slideshow: true,
	controlNav: true,
        directionNav: false,
        smoothHeight: false
    });

    });