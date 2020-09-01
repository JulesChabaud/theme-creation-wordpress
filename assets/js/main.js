function ouvrir() {
  var element = document.getElementById("moui");
  element.classList.add("mobile-menu-open");
  element.classList.remove("mobile-menu-close");
  //
  var element = document.getElementById("julio_burgerMenuOpen");
  element.classList.add("julio_burgerMenuOpenOpacityClose");
  element.classList.remove("julio_burgerMenuOpenOpacityOpen");
  var element = document.getElementById("julio_burgerMenuClose");
  element.classList.add("julio_burgerMenuOpenOpacityOpen");
  element.classList.remove("julio_burgerMenuOpenOpacityClose");

}

function fermer() {
  var element = document.getElementById("moui");
  element.classList.add("mobile-menu-close");
  element.classList.remove("mobile-menu-open");
  //
  var element = document.getElementById("julio_burgerMenuOpen");
  element.classList.add("julio_burgerMenuOpenOpacityOpen");
  element.classList.remove("julio_burgerMenuOpenOpacityClose");
  var element = document.getElementById("julio_burgerMenuClose");
  element.classList.add("julio_burgerMenuOpenOpacityClose");
  element.classList.remove("julio_burgerMenuOpenOpacityOpen");
}
