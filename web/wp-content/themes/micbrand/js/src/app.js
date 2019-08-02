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

var _loop = function _loop(i) {
	accordions[i].addEventListener("click", function(event) {
		if (!accordions[i].hasAttribute("open")) {
			event.preventDefault();
		} // Close all accordions.

		closeAccordions();
		accordions[i].setAttribute("open", "");
	});
};

for (var i = 0; i < accordions.length; i++) {
	_loop(i);
}

var closeAccordions = function closeAccordions() {
	for (var i = 0; i < accordions.length; i++) {
		accordions[i].removeAttribute("open");
	}
};
