document.addEventListener("DOMContentLoaded", function () {
  const menuBtn = document.querySelector('.navbar__menu-btn');
  const navLinks = document.querySelector('.navbar__links');

  if (menuBtn && navLinks) {
    menuBtn.addEventListener('click', () => {
      navLinks.classList.toggle('navbar__links--mobile');
    });
  }
});
