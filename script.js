// selecting elememts from webpage

const trainers = document.querySelectorAll(".trainers .member h4");

// trainers section animation effect

trainers.forEach(function (card) {
    card.addEventListener("mouseover", function () {
        this.classList.add("shade");
    });
});

trainers.forEach(function (card) {
    card.addEventListener("mouseout", function () {
        this.classList.remove("shade");
    });
});