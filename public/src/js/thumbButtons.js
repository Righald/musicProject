const onThumbClick = (mainCarousel, thumbCarousel, index) => () => {
  if (!thumbCarousel.clickAllowed()) return;
  mainCarousel.scrollTo(index);
};

const followMainCarousel = (mainCarousel, thumbCarousel) => () => {
  thumbCarousel.scrollTo(mainCarousel.selectedScrollSnap());
  selectThumbBtn(mainCarousel, thumbCarousel);
  console.log(window.document.querySelector('.is-selected'))
};

const selectThumbBtn = (mainCarousel, thumbCarousel) => {
  const previous = mainCarousel.previousScrollSnap();
  const selected = mainCarousel.selectedScrollSnap();
  thumbCarousel.slideNodes()[previous].classList.remove("is-selected");
  thumbCarousel.slideNodes()[selected].classList.add("is-selected");
};
