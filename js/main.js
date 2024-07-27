
document.addEventListener("DOMContentLoaded", (event) => {

  gsap.registerPlugin(ScrollTrigger);

  const txtTitulo = new SplitType('.titulo-hero', {types: 'words'});

  var tl = gsap.timeline();

  tl.to('.cabecalho', {
      y: 0,
      opacity: 1,
      duration: 0.01,

      ease: "sine.inOut",
    }).
    to('.menu', {
      y: 0,
      stagger: 0.05,
      opacity: 1,
      ease: "sine.inOut",
    }, "<");

    const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
      interval: 2000,
      touch: false
    })

})


