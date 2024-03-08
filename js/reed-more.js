// read-more.js
// Een script dat ervoor zorgt dat een paragraaf kan worden uitgeklapt door op een link te klikken.
// Gemaakt door: Volodymyr Korobkin



document.addEventListener('DOMContentLoaded', function() {
    if (window.innerWidth > 480) {
        return;
    }

    document.querySelectorAll('p.reed-more').forEach(function(p) {
        let reedMore = document.createElement('span');

        let text = p.textContent;
        let textShort = text.substring(0, 130);
        let lastSpace = textShort.lastIndexOf(' ');

        textShort = textShort.substring(0, lastSpace);
        if (textShort.charAt(textShort.length - 1).match(/[.,!?]/)) {
            textShort = textShort.substring(0, textShort.length - 1);
        }

        p.textContent = textShort + '...';

        reedMore.textContent = ' lees meer';
        reedMore.style.color = '#0550ae';

        reedMore.addEventListener('click', function() {
            p.textContent = text;
        });

        p.appendChild(reedMore);
    });
});
