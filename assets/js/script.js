let nav = document.querySelectorAll(".nav__link");
let nav_menu = document.querySelectorAll(".nav_menu .nav__link");
function toggleLinkActive() {
  this.classList.toggle("nav__link_active");
}
for (let link of nav_menu) {
  if (document.location.pathname === link.getAttribute("href")) {
    link.classList.toggle("nav__link_checked");
  }
}
for (let link of nav) {
  link.addEventListener("mouseover", toggleLinkActive);
  link.addEventListener("mouseout", toggleLinkActive);
}

let buttons = document.querySelectorAll(".button");
function toggleButtonActive() {
  this.classList.toggle("button_active");
}
for (let button of buttons) {
  button.addEventListener("mouseover", toggleButtonActive);
  button.addEventListener("mouseout", toggleButtonActive);
}
