import { isElementInViewport } from "./function.js";

const isHomePage = window.location.pathname === "/";
document.body.style.paddingTop = isHomePage ? "100vh" : "5.125rem";
const navBar = document.querySelector(".navbar");
const heroBanner = document.querySelector("#hero-banner");
const SectionOurContact = document.querySelector("#section-our-contact");

if (isHomePage) {
  navBar.setAttribute("id", "");
}

window.onscroll = function (event) {
  // handle navbar scroll
  const scrollThreshold = 100;
  if (window.scrollY > scrollThreshold) {
    navBar.classList.add("bg-scrolled");
    navBar.classList.remove("bg-fading"); // Remove fading class
  } else {
    navBar.classList.remove("bg-scrolled");
    navBar.classList.add("bg-fading"); // Add fading class
    setTimeout(() => {
      navBar.classList.remove("bg-fading"); // Remove fading class after a short delay
    }, 300); // Same duration as the CSS transition (0.3s)
  }

  // handle herobanner scroll
  const scrollPosition = window.scrollY;
  const maxScroll = window.innerHeight / 2;
  const opacity = 1 - scrollPosition / maxScroll;
  heroBanner.querySelectorAll(".carousel-caption").forEach((caption) => {
    caption.style.opacity = opacity >= 0 ? opacity : 0;
  });

  // hendle OurContact animation
  if (isElementInViewport(SectionOurContact)) {
    SectionOurContact.querySelectorAll(".contact-item").forEach((item) => {
      item.classList.add("visible");
    });
  }
};

// client logo slider
const copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logos").appendChild(copy);
