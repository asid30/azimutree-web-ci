// Minimal JS for Azimutree landing page
document.addEventListener("DOMContentLoaded", function () {
  // Menu toggle
  var btn = document.getElementById("menuToggle");
  var menu = document.getElementById("menu");
  if (btn && menu) {
    btn.addEventListener("click", function (e) {
      e.stopPropagation();
      menu.classList.toggle("hidden");
      menu.setAttribute("aria-hidden", menu.classList.contains("hidden"));
    });

    // Close menu when a link inside is clicked (mobile navigation)
    menu.addEventListener("click", function (e) {
      var target = e.target;
      if (target && target.classList && target.classList.contains("app-link")) {
        menu.classList.add("hidden");
        menu.setAttribute("aria-hidden", "true");
      }
    });

    // Close menu when tapping outside
    document.addEventListener("click", function (e) {
      if (!menu.classList.contains("hidden")) {
        var isClickInside = menu.contains(e.target) || btn.contains(e.target);
        if (!isClickInside) {
          menu.classList.add("hidden");
          menu.setAttribute("aria-hidden", "true");
        }
      }
    });
  }

  // Download confirmation modal
  var downloadBtn = document.getElementById("download");
  var dlModal = document.getElementById("downloadModal");
  if (downloadBtn && dlModal) {
    var dlConfirm = document.getElementById("downloadConfirm");
    var dlCancel = document.getElementById("downloadCancel");

    downloadBtn.addEventListener("click", function (e) {
      // prevent immediate navigation
      e.preventDefault();
      // show modal
      dlModal.classList.remove("hidden");
      // focus confirm
      dlConfirm.focus();
    });

    function closeDlModal() {
      dlModal.classList.add("hidden");
    }

    dlCancel.addEventListener("click", function () {
      closeDlModal();
    });

    dlConfirm.addEventListener("click", function () {
      // proceed to download in the same tab
      var url = downloadBtn.getAttribute("href");
      if (url) {
        window.location.href = url;
      }
      closeDlModal();
    });

    // close when clicking outside modal-box
    dlModal.addEventListener("click", function (e) {
      if (e.target.classList && e.target.classList.contains("modal-backdrop")) {
        closeDlModal();
      }
    });

    // close on ESC
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && !dlModal.classList.contains("hidden")) {
        closeDlModal();
      }
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
          behavior: "smooth",
        });
      });
    });
  }
  // Translate vertical mouse wheel into horizontal scroll for desktop users
  var sliderContainer = document.querySelector(".slider-container");
  var scrollEl = slider || sliderContainer;
  if (scrollEl) {
    // wheel -> horizontal (for mouse wheel users)
    scrollEl.addEventListener(
      "wheel",
      function (e) {
        if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
          e.preventDefault();
          scrollEl.scrollLeft += e.deltaY;
        }
      },
      { passive: false },
    );

    // drag-to-scroll (click and drag) for desktop
    var isDown = false;
    var startX;
    var scrollStart;

    scrollEl.addEventListener("pointerdown", function (e) {
      isDown = true;
      startX = e.clientX;
      scrollStart = scrollEl.scrollLeft;
      scrollEl.style.cursor = "grabbing";
      e.preventDefault();
    });

    document.addEventListener("pointerup", function () {
      if (isDown) {
        isDown = false;
        scrollEl.style.cursor = "";
      }
    });

    document.addEventListener("pointermove", function (e) {
      if (!isDown) return;
      var dx = e.clientX - startX;
      scrollEl.scrollLeft = scrollStart - dx;
    });
  }
});
