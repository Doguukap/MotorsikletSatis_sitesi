let sliderItems = document.querySelectorAll('.slider-item');
let prevButton = document.getElementById('prev-slide');
let nextButton = document.getElementById('next-slide');
let currentSlide = 0;

prevButton.addEventListener('click', () => {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = sliderItems.length - 1;
  }
  updateSlider();
});

nextButton.addEventListener('click', () => {
  currentSlide++;
  if (currentSlide >= sliderItems.length) {
    currentSlide = 0;
  }
  updateSlider();
});

function updateSlider() {
  sliderItems.forEach((item, index) => {
    item.style.display = 'none';
  });
  sliderItems[currentSlide].style.display = 'block';
}