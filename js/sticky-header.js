document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const body = document.querySelector('body');
    const dropdown = document.querySelector('#openDropDown');
    
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
            const checkBox = document.querySelector('#burger-menu-checkbox');
            if ((window.scrollY > header.offsetHeight * 1.5 || header.classList.contains('sticky')) && !checkBox.checked) {
                header.style.position = 'fixed';
                header.style.top = '-' + (parseInt(header.offsetHeight) + 10)  + 'px'
                dropdown.querySelector(".dropdown").style.display = 'none';           
                
                this.setTimeout(function() {
                    header.classList.add('sticky');
                }, 1);

                this.setTimeout(function() {
                    dropdown.querySelector(".dropdown").style.display = null;
                }, 100);
            }
        }

        headerPos = window.scrollY;
    });
});