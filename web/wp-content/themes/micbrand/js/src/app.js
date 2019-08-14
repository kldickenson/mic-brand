// Test to see if Babel is working

var hamburger = document.getElementById("hamburger");
var primaryNavigation = document.getElementById("site-navigation");
var pageWraper = document.querySelector(".site");
var fade = document.getElementById("hamburger-fade");

fade.classList.toggle("hidden");

hamburger.addEventListener("click", function() {
	primaryNavigation.classList.toggle("open");
	pageWraper.classList.toggle("menu-open");
	fade.classList.toggle("hidden");
});
fade.addEventListener("click", function() {
	primaryNavigation.classList.toggle("open");
	pageWraper.classList.toggle("menu-open");
	fade.classList.toggle("hidden");
});


