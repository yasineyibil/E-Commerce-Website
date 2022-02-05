/* -------- Sticky Menu  START --------- */
$(document).ready(function() {
	$(document).on("scroll", onScroll);
	$(window).resize(function() {
	  if ($(document).width() > 714)
		$(".responsive-menu").css("height", "0px");
	});
  
	var menu = $(".menu").html();
	$(".responsive-menu").append(menu);
	$(".responsive-menu ul").removeClass("main-menu");
	$(".responsive-menu ul").addClass("mobile-menu");
  
	$(".mobile-menu-icon").click(function() {
	  var respMenu = $(".responsive-menu");
	  var height = (respMenu.css("height") == "200px") ? "0px" : "200px";
	  respMenu.animate({
		height: height
	  }, 100);
	});
  
	$(".menu-button").click(function(event) {
	  event.preventDefault();
	  var href = $(this).attr('href');
	  scrollAmount = (href == "#section-home") ? 0 : $(href).offset().top - 120;
	  $('html, body').animate({
		scrollTop: scrollAmount
	  }, 1000);
	});
  
	function onScroll() {
	  var scrollPos = $(document).scrollTop();
	  $("#test").html(scrollPos);
	  $('.menu li a').each(function() {
		var currLink = $(this);
		var refElement = $(currLink).attr("href");
		if ($(refElement).position().top - 190 <= scrollPos && $(refElement).position().top - 190 + $(refElement).height() >= scrollPos) {
		  currLink.parent().addClass("active");
		  progressWidth = $(".progress-bar").css("width");
		  console.log(progressWidth);
			if (refElement == "#section-skills" && progressWidth == "0px")
			  {
				$(".progress-html").animate({
				  width: ["40%", "linear"]
				}, 50);
				$(".progress-css").animate({
				  width: ["30%", "linear"]
				}, 100);
				$(".progress-js").animate({
				  width: ["15%", "linear"]
				}, 50);
				$(".progress-python").animate({
				  width: ["20%", "linear"]
				}, 100);
			  }
			 
		  
		} else {

		}
	  });
	}
  
  });
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("menucontainer");
var sticky = navbar.offsetTop;
function myFunction() {
	if (window.pageYOffset >= 250) {
		navbar.classList.add("sticky");
		document.getElementById("logorenk").style.color = "#000";
	   
	} 
	else if (window.pageYOffset < 250) {
		navbar.classList.remove("sticky");
		document.getElementById("logorenk").style.color = "#fff";



	}
}

/* ---------- Sticky Menu END ---------- */

/* ---------- TOP SCROLL START --------- */
 $(function() {
    $("#top").click(function() {
        $("html,body").stop().animate({ scrollTop: "0" }, 1000);
    });
});
$(window).scroll(function() {
    var uzunluk = $(document).scrollTop();
    if (uzunluk > 300) $("#top").fadeIn(500);
    else { $("#top").fadeOut(500); }
});
/* ---------- TOP SCROLL END ----------  */

/* ---------- ANIMATİON START ---------- */
ScrollReveal().reveal('.scroll');  
ScrollReveal().reveal('.scrollin', { 
  distance: '60px',
  origin: 'top',
  easing: 'ease-in'
});
$(function(){

  window.sr = ScrollReveal();

  if ($(window).width() < 768) {

  	if ($('.timeline-content').hasClass('js--fadeInLeft')) {	  
  	}



  } else {
  	
  	sr.reveal('.js--fadeInLeft', {
	    origin: 'left',
	    distance: '300px',
		  easing: 'ease-in-out',
	    duration: 800,
		distance: '100px'
	  });


  }
  
  sr.reveal('.js--fadeInLeft', {
	    origin: 'left',
	    distance: '300px',
		  easing: 'ease-in-out',
	    duration: 800,
		distance: '100px'
	  });



});

/* ---------- ANİMATİON END ----------   */

