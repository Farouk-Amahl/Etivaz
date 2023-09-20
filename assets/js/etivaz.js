console.log('Étivaz chargé...')
// When the user scrolls the page, execute myFunction
window.onscroll = function() { 
	console.log($(window).width());
	if( $(window).width() > 600 ){
		stickyCock() 
	};
}


// changer les noms
// Get the navbar
var navbar = document.getElementById("etivaz-header");
var limit = document.getElementById("menu-premier");

// Get the offset position of the navbar
var sticky = limit.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyCock() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("munster")
  } else {
    navbar.classList.remove("munster");
  }
} 