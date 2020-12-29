
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("sidebar-container").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("sidebar-container").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

let c = 45;

function draw() {
  document.documentElement.style.setProperty("--direction", c++ + "deg");
  requestAnimationFrame(draw);
}

requestAnimationFrame(draw);



/* Catégorie Partie */
