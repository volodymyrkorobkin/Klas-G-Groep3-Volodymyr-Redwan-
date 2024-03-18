let currentSlide = 0;
let slidesCnt;

function showSlide(n) {
    let slidesWrap = document.querySelector('#slides-wrap');
    

    if (currentSlide + n >= slidesCnt) {
        currentSlide = 0;
    } else
    if (currentSlide + n < 0) {
        currentSlide = slidesCnt - 1;
    } else {
        currentSlide += n;
    }

    slidesWrap.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function nextSlide() {
    showSlide(1);
}

function prevSlide() {
    showSlide(-1);
}


addEventListener('DOMContentLoaded', function() {
    slidesCnt = document.querySelector('#slides-wrap').childElementCount;
});
