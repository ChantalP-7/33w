const carrousels = document.querySelectorAll(".carrousel");
const radios = document.querySelectorAll(".carrousel__radio");

(function () {
	console.log("voici le carrousel");

	radios.forEach((radio, index) => {
		radio.addEventListener("change", () => {
			initialise_carrousel();
			carrousels[index].style.opacity = 1;
		});
	});

	function initialise_carrousel() {
		carrousels.forEach((carrousel, i) => {
			carrousel.style.opacity = 0;
		});
	}
})();

let currentSlide = 0;

function showSlide(index) {
	// Cache toutes les diapositives
	carrousels.forEach((carrousel) => carrousel.classList.remove("active"));
	// Affiche la diapositive sélectionnée
	carrousels[index].classList.add("active");
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % carrousels.length;
    showSlide(currentSlide);
}

// Lancez le carrousel
setInterval(nextSlide, 5000); // Change de diapositive toutes les 5 secondes
