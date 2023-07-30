document.addEventListener("DOMContentLoaded", (e) => {
  const hamburgerMenu = document.querySelector(".js-hamburger-menu");
  const hamburgerMenuSubmenu = document.querySelector(
    ".js-hamburger-menu__submenu"
  );

  if (hamburgerMenu) {
    hamburgerMenu.addEventListener("click", (e) => {
      hamburgerMenu.classList.toggle("submenu-open");
      hamburgerMenuSubmenu.classList.toggle("submenu-open");
    });
  }
});
