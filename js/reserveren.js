

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#datum').addEventListener('change', function() {
        const datum = document.querySelector('#datum').value;
        const dag = new Date(datum).getDay();

        const timeBox = document.querySelector('#time');
        timeBox.innerHTML = '';
        const currentHour = new Date().getHours();

        if(dag >= 1 && dag <= 5) {

            for (let i = 11; i < 21; i++) {
                if (new Date(datum).getDate() == new Date().getDate()) {
                    if (i <= currentHour) {
                        continue;
                    }
                }
                timeBox.innerHTML += `<option value="${i}:00">${i}:00 - ${i+1}:00</option>`;
            }
        } else if (dag === 0 || dag === 6) {
            for (let i = 13; i < 22; i++) {
                if (new Date(datum).getDate() == new Date().getDate()) {
                    if (i <= currentHour) {
                        continue;
                    }
                }
                timeBox.innerHTML += `<option value="${i}:00">${i}:00 - ${i+1}:00</option>`;
            }
        }

    });
});