function navSlide() {
  const burger = document.querySelector(".hamburger hamburger--collapse");
  //const nav = document.querySelector(".leiste");

  //toggle Nav-Bar
  burger.addEventListener("click", function () {
    nav.classList.toggle("is-active");
    console.log("clicked");

    //Burger animation
    //burger.classList.toggle("toggle");
  });
}

navSlide();
