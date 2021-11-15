(() => {
  // src/js/functions.js
  function navSlide() {
    const burger = document.getElementById("hamburger-menu");
    const nav = document.getElementById("navbar");
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
  var constFunctions = () => {
    navSlide();
    setCurrentPage();
  };
  constFunctions();
})();
