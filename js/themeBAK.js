jQuery(function($){

	//** Equal Heights **//
	$('.first .col').matchHeight();
	$('.three .col').matchHeight();
    $('.four .owl-item').matchHeight();
    $('.insidelevante .equal').matchHeight();
    $('.blocks .block').matchHeight();

	function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector(".home header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
 
});


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("main-nav");
    if (x.className === "main-nav") {
        x.className += " responsive";
    } else {
        x.className = "main-nav";
    }
}