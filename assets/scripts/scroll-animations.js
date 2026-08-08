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
  if(section) {
  section.scrollIntoView({ behavior: "smooth" });
}
}
