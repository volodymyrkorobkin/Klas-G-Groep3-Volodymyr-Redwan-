



document.addEventListener("DOMContentLoaded", function() {
    const emetents = document.querySelectorAll(".transform-view");

    const MAX_TRANSFORM = 0.00008;

    emetents.forEach(function(element) {
        let mouseEvent = null;

        let x, y;

        element.style.transition = "all 0.1s";

        element.addEventListener("mousemove", function(e) {
            x = (e.clientX - (element.offsetLeft - window.scrollX))/element.clientWidth;
            y = (e.clientY - (element.offsetTop - window.scrollY))/element.clientHeight;

            if (!mouseEvent) {
                mouseEvent = setInterval(function() {
                    newX = x * 2 - 1;
                    newY = y * 2 - 1;
        
                    let xVal = newX * MAX_TRANSFORM;
                    let yVal = newY * MAX_TRANSFORM;
        
                    element.style.transform = `matrix3d(1, 0, 0, ${xVal}, 0, 1, 0, ${yVal}, 0, 0, 1, 0, 0, 0, 0, 1)`;
                    }, 1000/60);
            }
        });

        element.addEventListener("mouseout", function() {
            element.style.transform = "scale(1)";

            clearInterval(mouseEvent);
            mouseEvent = null;
        });


    });
});