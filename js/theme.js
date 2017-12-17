jQuery(function($){

	//** Equal Heights **//
	$('.first .col').matchHeight();
	$('.three .col').matchHeight();
    $('.four .owl-item').matchHeight();
    $('.insidelevante .equal').matchHeight();
    $('.blocks .block').matchHeight();

	function init() {
        window.addEventListener('scroll', function(e){
            
        });
    }
    window.onload = init();

    $('.km-toggle-faq').each(function(index, el) {
        $(this).click(function(event) {
            $(this).next('.km-toggle-answer').toggle(400);
            $(this).find('.km-icon--plus').toggleClass('km-open');
        });
    });
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