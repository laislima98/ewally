// Include files this way \/
//= include "_included_file.js"
var menuButton = document.getElementById("toggle-menu");
var i;

function openMenu(){
  var menu = document.getElementById("menu");
  menu.classList.toggle("show");
  menuButton.classList.toggle("open");
}

menuButton.addEventListener("click", function(){
  openMenu();
})

function subMenu(){

}
