const navToggle = document.querySelector(".menu-toggle");
const primaryNav = document.querySelector("#primary-menu");
const overlay = document.querySelector("#overlay");

//-------------- Mobile nav -----------------
navToggle.addEventListener("click", () => {
  const visibility = primaryNav.getAttribute("data-visible");

  if (visibility === "false") {
    primaryNav.setAttribute("data-visible", true);
    navToggle.setAttribute("aria-expanded", true);
    overlay.style.display = "block";
  } else if (visibility === "true") {
    primaryNav.setAttribute("data-visible", false);
    navToggle.setAttribute("aria-expanded", false);
    overlay.style.display = "none";
  }
});

//--------------- Animations ----------------
AOS.init({
  offset: 180,
  duration: 600,
  easing: "ease-in-sine",
  delay: 100,
  once: true,
});

//--------------- FAQ accordion --------------
const accordionTitle = document.querySelectorAll(".accordion li");
const accordionDesc = document.querySelectorAll(".accordion-des");

for (let i = 0; i < accordionTitle.length; i++) {
  console.log(accordionTitle[i]);
  accordionTitle[i].addEventListener("click", () => {
    if (!accordionDesc[i].classList.value.includes("show")) {
      accordionDesc.forEach((e) => {
        e.classList.remove("show");
      });
    }
    accordionDesc[i].classList.toggle("show");
  });
}
