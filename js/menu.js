'use strict'

let clickCounter = 0;
let menu = document.getElementById('menu__container');

function showMenu() {
  menu.classList.add("menu__container-showed");
  menu.classList.remove("menu__container-removed");
}

function closeMenu() {
  menu.classList.remove("menu__container-showed");
  menu.classList.add("menu__container-removed");
}