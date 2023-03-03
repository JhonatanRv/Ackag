function menuOn() {
  let menuMobile = document.querySelector('.mobile-menu');
  if (menuMobile.classList.contains('open')) {
    menuMobile.classList.remove('open');
    menuMobile.classList.remove('menu-animation');
  } else {
    menuMobile.classList.add('open');
    menuMobile.classList.add('menu-animation');
  }
}