var swipper = new Swipper(".mySwipper", {
  slidesPerView: 4,
  spaceBetween: 30,
  slidesPerGroup: 3,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swipper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swipper-button-next",
    prevEl: ".swipper-button-prev",
  },
});