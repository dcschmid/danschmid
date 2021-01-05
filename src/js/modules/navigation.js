export default function navigation() {
  const sideNav = document.querySelector(".nav__list"),
    toggleNavBtn = document.querySelector(".nav__toggle"),
    navLinks = document.querySelectorAll(".link");

  function toggleNav() {
    sideNav.classList.toggle("nav__list--open");
  }

  function toDefaults() {
    sideNav.classList.remove("nav__list--open");
  }

  toggleNavBtn.addEventListener("click", toggleNav);

  navLinks.forEach(el => {
    el.addEventListener("click", event => {
      toDefaults();
    });
  });
}
