// Minimal JS for Azimutree landing page
document.addEventListener("DOMContentLoaded", function () {
  var btn = document.getElementById("menuToggle");
  var menu = document.getElementById("menu");
  if (btn && menu) {
    btn.addEventListener("click", function () {
      menu.classList.toggle("hidden");
    });
  }
});
