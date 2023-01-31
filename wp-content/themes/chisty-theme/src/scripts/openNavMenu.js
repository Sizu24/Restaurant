function openNavMenu() {
  const navButton = document.querySelector('.js-toggle-nav');
  const mobileNavMenu = document.querySelector('.js-nav-drawer');

  if (!navButton) return;

  navButton.addEventListener('click', () => {
    mobileNavMenu.classList.toggle('show');
  });
}

export default openNavMenu;