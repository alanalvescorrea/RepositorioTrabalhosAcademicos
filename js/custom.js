/* Navigation Menu */

ddlevelsmenu.setup("ddtopmenubar", "topbar");


/* Dropdown Select */

// Create the dropdown base

$("<select />").appendTo(".navis");

// Create default option "Go to..."

$("<option />", {
   "selected": "selected",
   "value"   : "",
   "text"    : "Menu"
}).appendTo(".navis select");

// Populate dropdown with menu items

$(".navi a").each(function() {
 var el = $(this);
 $("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
 }).appendTo(".navis select");
});

$(".navis select").change(function() {
  window.location = $(this).find("option:selected").val();
});


/* FlexSlider */

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: true,
    pauseOnHover: true,
    slideshowSpeed: 3000,
    prevText: "", 
    nextText: ""
  });
});


/* Carousel */

$('#carousel_container').carouFredSel({
	responsive: true,
	width: '100%',
   direction: 'right',
	scroll: 4,
   prev : {
      button	: "#car_prev",
      key		: "left"
   },
   next : {
      button	: "#car_next",
      key		: "right"
   },
	items: {	
		visible: {
         min: 1,
			max: 4
		}
	}
});

/* prettyPhoto Gallery */

jQuery(".prettyphoto").prettyPhoto({
   overlay_gallery: false, social_tools: false
});

/* Isotype */

// cache container
var $container = $('#portfolio');
// initialize isotope
$container.isotope({
  // options...
});

// filter items when filter link is clicked
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
});               





