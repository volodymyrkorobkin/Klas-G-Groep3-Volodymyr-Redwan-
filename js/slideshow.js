let slidesCnt = 0;
let activeSlide = 0;

function showSlide(n) {
    let slidesWrap = document.querySelector('#slides-wrap');
    slidesWrap.style.marginLeft = -1250 * n + 'px';
}

function nextSlide() {
    if (activeSlide < slidesCnt - 1) {
        activeSlide++;
    } else {
        activeSlide = 0;
    }
    showSlide(activeSlide);
}

function prevSlide() {
    if (activeSlide > 0) {
        activeSlide--;
    } else {
        activeSlide = slidesCnt - 1;
    }
    showSlide(activeSlide);
}

document.addEventListener('DOMContentLoaded', function() {
    slidesCnt = document.querySelector('#slides-wrap').childElementCount;
});