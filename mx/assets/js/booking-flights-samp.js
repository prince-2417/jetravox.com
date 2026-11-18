// Mobile Menu
const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");

if (menuBtn) {
  menuBtn.addEventListener("click", () => {
    mobileMenu.style.display =
      mobileMenu.style.display === "flex" ? "none" : "flex";
  });
}

// Trip Tabs
const tabs = document.querySelectorAll(".tab");
tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    tabs.forEach((t) => t.classList.remove("active"));
    tab.classList.add("active");
  });
});

// Toggle Search Form on Mobile
const toggleSearchBtn = document.getElementById("toggleSearchBtn");
const mobileBookingForm = document.getElementById("mobileBookingForm");

if (toggleSearchBtn) {
  toggleSearchBtn.addEventListener("click", () => {
    mobileBookingForm.classList.toggle("open");
    toggleSearchBtn.innerHTML = mobileBookingForm.classList.contains("open")
      ? '<i class="fa-solid fa-xmark"></i> Hide Search'
      : '<i class="fa-solid fa-magnifying-glass"></i> Search Flights';
  });
}
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item) => {
  item.querySelector(".faq-question").addEventListener("click", () => {
    faqItems.forEach((faq) => {
      if (faq !== item) {
        faq.classList.remove("active");
      }
    });

    item.classList.toggle("active");
  });
});
