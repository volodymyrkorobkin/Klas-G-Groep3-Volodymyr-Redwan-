document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const body = document.querySelector('body');
    
    let headerPos = 0;


    body.style.paddingTop = header.offsetHeight + 'px';
    header.style.marginTop = '-' + header.offsetHeight + 'px';
    

    window.addEventListener('scroll', function(e) {
        if (window.scrollY <= 0) {
            header.style.position = 'unset'
            header.style.top = header.offsetHeight + 'px';
            header.classList.remove('sticky');
        } else if (window.scrollY < headerPos) {
            header.style.top = header.offsetHeight + 'px';
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