function showSlide(n) {
    let slidesWrap = document.querySelector('#slides-wrap');
    slidesWrap.scrollBy({
        left: slidesWrap.clientWidth * n,
    });
}

function nextSlide() {
    showSlide(1);
}

function prevSlide() {
    showSlide(-1);
}

document.addEventListener('DOMContentLoaded', function() {
    slidesCnt = document.querySelector('#slides-wrap').childElementCount;
});