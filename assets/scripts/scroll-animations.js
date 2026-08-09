// ------ Changements de couleur du bouton actif dans la navbar et scroll vers la section correspondante ------
let navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach((navLink) => {
  navLink.addEventListener("click", handleClickOnButton);
});

function handleClickOnButton() {
  navLinks.forEach((navLink) => {
    navLink.classList.remove("active");
  });

  this.classList.add("active");

  const section = document.getElementById(this.dataset.section);
  if (section) {
    section.scrollIntoView({ behavior: "smooth" });
  }
}

// ---- Animation des éléments lors du scroll ------
const elementsAnimes = document.querySelectorAll("[data-animate]");

const observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      const element = entry.target;
      const delay = element.dataset.delay || 0;
      observer.unobserve(element);

      setTimeout(function () {
        element.classList.add("is-visible");
      }, delay * 1000);
    }
  });
});

elementsAnimes.forEach(function (element) {
  observer.observe(element);
});
