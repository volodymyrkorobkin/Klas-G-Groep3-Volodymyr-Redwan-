

let headerPos;



document.addEventListener('DOMContentLoaded', function() {
    let header = document.querySelector('header');
    let headerPos = 0;

    document.querySelector('body').style.paddingTop = header.offsetHeight + 'px';
    

    window.addEventListener('scroll', function(e) {

        if (window.scrollY == 0) {
            header.style.position = 'absolute';
            header.style.top = '0';
            header.classList.remove('sticky');
        } else if (window.scrollY < headerPos) {
            header.style.top = '0';
        } else {
            if (window.scrollY > header.offsetHeight * 1.5 || header.classList.contains('sticky')) {
                header.style.position = 'fixed';
                header.style.top = '-' + (parseInt(header.offsetHeight) + 10)  + 'px'
                
                this.setTimeout(function() {
                    header.classList.add('sticky');
                }, 1);
            }
        }

        headerPos = window.scrollY;
    });
});