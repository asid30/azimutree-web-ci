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

  // Press/tap animation for screenshot images
  (function () {
    var imgs = document.querySelectorAll(".screenshots img");
    if (!imgs || imgs.length === 0) return;

    imgs.forEach(function (img) {
      // make images focusable for keyboard activation
      if (!img.hasAttribute("tabindex")) img.setAttribute("tabindex", "0");

      function addPressed() {
        img.classList.add("pressed");
      }

      function removePressed() {
        img.classList.remove("pressed");
      }

      img.addEventListener("pointerdown", function (e) {
        addPressed();
      });

      img.addEventListener("pointerup", function (e) {
        removePressed();
      });

      img.addEventListener("pointercancel", removePressed);
      img.addEventListener("pointerleave", removePressed);

      // keyboard activation (Enter / Space)
      img.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          addPressed();
          setTimeout(removePressed, 150);
        }
      });
    });
  })();

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

  // Hero-style fullscreen transition (tap to zoom) for screenshots
  (function () {
    var imgs = document.querySelectorAll(".screenshots img");
    if (!imgs || imgs.length === 0) return;

    function openHero(img) {
      var rect = img.getBoundingClientRect();
      var clone = img.cloneNode(true);
      clone.style.position = "fixed";
      clone.style.left = rect.left + "px";
      clone.style.top = rect.top + "px";
      clone.style.width = rect.width + "px";
      clone.style.height = rect.height + "px";
      clone.style.margin = "0";
      clone.style.zIndex = 200;
      clone.classList.add("hero-image");
      document.body.appendChild(clone);

      // small overlay backdrop
      var overlay = document.createElement("div");
      overlay.className = "hero-overlay";
      document.body.appendChild(overlay);

      // ensure layout applied
      clone.getBoundingClientRect();

      // compute target size (fit into viewport while keeping aspect)
      var maxW = Math.max(window.innerWidth * 0.92, window.innerWidth - 32);
      var maxH = Math.max(window.innerHeight * 0.86, window.innerHeight - 32);
      var naturalW = img.naturalWidth || rect.width;
      var naturalH = img.naturalHeight || rect.height;
      var ratio = naturalW / Math.max(1, naturalH);
      var targetW = maxW;
      var targetH = targetW / ratio;
      if (targetH > maxH) {
        targetH = maxH;
        targetW = targetH * ratio;
      }
      var targetLeft = (window.innerWidth - targetW) / 2;
      var targetTop = (window.innerHeight - targetH) / 2;

      // animate to center
      requestAnimationFrame(function () {
        overlay.classList.add("open");
        clone.style.left = targetLeft + "px";
        clone.style.top = targetTop + "px";
        clone.style.width = targetW + "px";
        clone.style.height = targetH + "px";
        clone.style.borderRadius = "12px";
      });

      function closeHero() {
        overlay.classList.remove("open");
        clone.style.left = rect.left + "px";
        clone.style.top = rect.top + "px";
        clone.style.width = rect.width + "px";
        clone.style.height = rect.height + "px";
        setTimeout(function () {
          if (clone.parentNode) clone.parentNode.removeChild(clone);
          if (overlay.parentNode) overlay.parentNode.removeChild(overlay);
        }, 360);
        document.removeEventListener("keydown", onKey);
      }

      overlay.addEventListener("click", closeHero);
      clone.addEventListener("click", closeHero);

      function onKey(e) {
        if (e.key === "Escape") closeHero();
      }
      document.addEventListener("keydown", onKey);
    }

    imgs.forEach(function (el) {
      el.style.cursor = "zoom-in";
      el.addEventListener("click", function () {
        openHero(el);
      });
      el.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          openHero(el);
        }
      });
    });
  })();
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
