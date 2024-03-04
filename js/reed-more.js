



document.addEventListener('DOMContentLoaded', function() {
    if (window.innerWidth > 480) {
        return;
    }

    document.querySelectorAll('p.reed-more').forEach(function(p) {
        let reedMore = document.createElement('span');

        let text = p.textContent;
        let textShort = text.substring(0, 200);
        let lastSpace = textShort.lastIndexOf('. ');
        if (lastSpace > 0) {
            textShort = textShort.substring(0, lastSpace + 1);
        } else {
            lastSpace = textShort.lastIndexOf(' ');
            if (lastSpace > 0) {
                textShort = textShort.substring(0, lastSpace + 1);
            }
        }

        p.textContent = textShort;

        reedMore.textContent = ' lees meer';
        reedMore.style.color = 'blue';

        reedMore.addEventListener('click', function() {
            p.textContent = text;
        });

        p.appendChild(reedMore);
    });
});

