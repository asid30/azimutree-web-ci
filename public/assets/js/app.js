// Minimal JS for Azimutree landing page
document.addEventListener("DOMContentLoaded", function () {
  // Menu toggle
  var btn = document.getElementById("menuToggle");
  var menu = document.getElementById("menu");
  if (btn && menu) {
    btn.addEventListener("click", function () {
      menu.classList.toggle("hidden");
    });
  }

  // Screenshot slider
  var slider = document.querySelector(".screenshots");
  var dots = document.querySelectorAll(".dot");
  
  if (slider && dots.length > 0 && slider.children.length > 0) {
    // Helper function to calculate slide width
    function getSlideWidth() {
      var itemWidth = slider.children[0].offsetWidth;
      var gap = parseFloat(getComputedStyle(slider).gap) || 0;
      return itemWidth + gap;
    }

    // Update active dot on scroll
    slider.addEventListener("scroll", function () {
      var scrollLeft = slider.scrollLeft;
      var slideWidth = getSlideWidth();
      var currentIndex = Math.round(scrollLeft / slideWidth);
      
      dots.forEach(function (dot, index) {
        if (index === currentIndex) {
          dot.classList.add("active");
        } else {
          dot.classList.remove("active");
        }
      });
    });

    // Click on dots to navigate
    dots.forEach(function (dot) {
      dot.addEventListener("click", function () {
        var slideIndex = parseInt(this.getAttribute("data-slide"));
        var slideWidth = getSlideWidth();
        slider.scrollTo({
          left: slideIndex * slideWidth,
          behavior: "smooth"
        });
      });
    });
  }
});
