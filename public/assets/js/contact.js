import { isElementInViewport } from "./function.js";

const SectionOurContact = document.querySelector("#section-our-contact");

window.onscroll = (e) => {
  if (isElementInViewport(SectionOurContact)) {
    SectionOurContact.querySelectorAll(".contact-item").forEach((item) => {
      item.classList.add("visible");
    });
  }
};
