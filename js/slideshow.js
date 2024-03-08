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