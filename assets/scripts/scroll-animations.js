// ------ Changements de couleur du bouton actif dans la navbar ------
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

// ---- Scroll spy : active le bon bouton selon la section visible ----
const sections = document.querySelectorAll("section");

const sectionObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      const section = entry.target;
      const boutons = document.querySelectorAll(
        `.nav-link[data-section="${section.id}"]`,
      );

      navLinks.forEach((navLink) => {
        navLink.classList.remove("active");
      });

      boutons.forEach((bouton) => {
        bouton.classList.add("active");
      });
    }
  });
});

sections.forEach(function (section) {
  sectionObserver.observe(section);
});

// ---- Animation apparition des éléments ------
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
