function navSlide() {
  //const burger = document.querySelector(".hamburger hamburger--collapse");
  const burger = document.getElementById("hamburger-menu");

  const nav = document.getElementById("navbar");

  //toggle Nav-Bar
  burger.addEventListener("click", () => {
    burger.classList.toggle("is-active");
    nav.classList.toggle("is-active");
  });
}

function setCurrentPage() {
  const links = document.getElementsByClassName("page");

  for (let index = 0; index < links.length; index++) {
    const element = links[index];

    element.addEventListener("click", () => {
      let current = document.getElementById("current");
      element.setAttribute("id", "current");
      current.removeAttribute("id", "current");
    });
  }
}

const constFunctions = () => {
  navSlide();
  setCurrentPage();
};

constFunctions();
