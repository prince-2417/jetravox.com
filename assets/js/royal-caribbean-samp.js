document.addEventListener("DOMContentLoaded", function () {
  /*
    ==========================================
    ITINERARY TOGGLE
    ==========================================
    */

  document.querySelectorAll(".itinerary-btn").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const body = btn.nextElementSibling;
      const isOpen = body.classList.contains("open");
      body.classList.toggle("open", !isOpen);
      btn.textContent = isOpen ? "+ View itinerary" : "- Hide itinerary";
    });
  });

  /*
    ==========================================
    MOBILE NAVIGATION
    ==========================================
    */

  const menuToggle = document.getElementById("menuToggle");

  const mainNav = document.getElementById("mainNav");

  if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", function () {
      mainNav.classList.toggle("active");

      menuToggle.classList.toggle("active");
    });

    /*
        Close Menu When Clicking Navigation
        */

    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        mainNav.classList.remove("active");

        menuToggle.classList.remove("active");
      });
    });
  }

  /*
    ==========================================
    STICKY HEADER
    ==========================================
    */

  const header = document.querySelector(".site-header");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      header.classList.add("header-scrolled");
    } else {
      header.classList.remove("header-scrolled");
    }
  });

  /*
    ==========================================
    SMOOTH SCROLL
    ==========================================
    */

  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener("click", function (event) {
      const targetId = this.getAttribute("href");

      if (targetId !== "#" && document.querySelector(targetId)) {
        event.preventDefault();

        document.querySelector(targetId).scrollIntoView({
          behavior: "smooth",
        });
      }
    });
  });

  /*
    ==========================================
    PHONE NUMBER CLICK TRACKING
    ==========================================
    */

  const phoneLinks = document.querySelectorAll('a[href^="tel:"]');

  phoneLinks.forEach(function (phone) {
    phone.addEventListener("click", function () {
      console.log("Call button clicked");
    });
  });
});

/* =========================================
   MOBILE CALL BANNER - SHOW ON SCROLL
========================================= */

document.addEventListener("DOMContentLoaded", function () {
  const callBanner = document.getElementById("mobileCallBanner");

  const callClose = document.getElementById("mobileCallClose");

  if (!callBanner) {
    return;
  }

  /* =========================
           CHECK MOBILE WIDTH
        ========================= */

  function isMobile() {
    return window.innerWidth <= 575;
  }

  /* =========================
           SHOW AFTER SCROLL
        ========================= */

  window.addEventListener(
    "scroll",
    function () {
      if (!isMobile()) {
        callBanner.classList.remove("show");

        return;
      }

      if (window.scrollY > 100) {
        callBanner.classList.add("show");
      } else {
        callBanner.classList.remove("show");
      }
    },
    {
      passive: true,
    },
  );

  /* =========================
           HIDE BUTTON
        ========================= */

  callClose.addEventListener("click", function () {
    callBanner.classList.remove("show");
  });

  /* =========================
           RESIZE CHECK
        ========================= */

  window.addEventListener("resize", function () {
    if (!isMobile()) {
      callBanner.classList.remove("show");
    }
  });
});
