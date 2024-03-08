

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#datum').addEventListener('change', function() {
        const datum = document.querySelector('#datum').value;
        const dag = new Date(datum).getDay();

        const timeBox = document.querySelector('#time');
        timeBox.innerHTML = '';

        if(dag >= 1 && dag <= 5) {
            for (let i = 11; i < 21; i++) {
                timeBox.innerHTML += `<option value="${i}:00">${i}:00 - ${i+1}:00</option>`;
            }
        } else {
            for (let i = 13; i < 22; i++) {
                timeBox.innerHTML += `<option value="${i}:00">${i}:00 - ${i+1}:00</option>`;
            }
        }

    });
});