function splitBeforeAfter() {
  const slider = document.querySelector('.js-split-handle');
  const sliderButton = document.querySelector('.js-split-button');
  const afterImage = document.querySelector('.js-split-after');
  const afterTitle = document.querySelector('.js-title-after');

  if (!slider) return;
  
  slider.addEventListener('input', (e) => {
    let sliderPosition = e.target.value;
    console.log(sliderPosition);
    afterImage.style.clipPath = 'inset(0 0 0 ' + sliderPosition + '%)';
    afterTitle.style.clipPath = 'inset(0 0 0 ' + sliderPosition + '%)';
    sliderButton.style.left = `calc(${sliderPosition}% - 18px)`;
  });
}

export default splitBeforeAfter;