// zoom.js
// Een script dat ervoor zorgt dat een afbeelding kan worden vergroot door erop te klikken.
// Gemaakt door: Volodymyr Korobkin

document.addEventListener('DOMContentLoaded', function() {
    var imgs = document.querySelectorAll('.zoom');
    imgs.forEach(function(img) {
        img.addEventListener('click', function() {
            if (img.classList.contains('zoomed')) {
                img.classList.remove('zoomed');
            } else {
                var newImg = document.createElement('img');
                newImg.classList.add('img-overlay');

                newImg.src = img.src;
                newImg.style.top = img.offsetTop - window.scrollY + 'px';
                newImg.style.left = img.offsetLeft - window.scrollX + 'px';
                newImg.style.width = img.width + 'px';
                newImg.style.height = img.height + 'px';

                document.body.appendChild(newImg);

                newImg.addEventListener("load", function() {

                    setTimeout(function() {
                        img.style.opacity = '0';

                        newImg.classList.add('zoomed');
                        newImg.style.top = '0';
                        newImg.style.left = '0';

                        newImg.style.width = '100%';
                        newImg.style.height = '100%';

                    }, 1);

                    setTimeout(function() {
                        newImg.style.backdropFilter = 'brightness(0.5)';

                        newImg.addEventListener('click', function() {
                            newImg.classList.remove('zoomed');
                            newImg.style.top = img.offsetTop - window.scrollY + 'px';
                            newImg.style.left = img.offsetLeft - window.scrollX + 'px';

                            newImg.style.width = img.width + 'px';
                            newImg.style.height = img.height + 'px';

                            newImg.style.backdropFilter = 'none';


                            setTimeout(function() {     
                                img.style.opacity = '1';
                                newImg.remove();
                            }, 250);
                        });
                    }, 250);


                });
            }
        });
    });
});