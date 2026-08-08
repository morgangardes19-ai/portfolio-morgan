let overlayBurger = document.querySelector("#overlay-burger");
let overlayLogoBurger = document.querySelector("#logo-burger");
let overlayLogoCroixMenuMobile = document.querySelector("#croix-menu-burger");

overlayLogoBurger.addEventListener("click", handleClickOnLogoBurger);
overlayLogoCroixMenuMobile.addEventListener("click", handeClickOnLogoCroixMobile);

function handleClickOnLogoBurger () {
    overlayBurger.classList.remove("translate-x-full", "-right-4");
    overlayBurger.classList.add("right-0");
}

function handeClickOnLogoCroixMobile () {
    overlayBurger.classList.add("translate-x-full", "-right-4");
    overlayBurger.classList.remove("right-0");
}