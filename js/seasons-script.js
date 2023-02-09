let title = document.querySelectorAll('.season-title');
let text = document.querySelectorAll('.season-text');
let id_ok;

for (let el of title) {
    el.onclick = function () {
        el.nextElementSibling.classList.toggle('hidden');
        id_ok = el.nextElementSibling.id;
        el.classList.toggle('border-season-title');

        for (let el of text) {
            if (el.id != id_ok) {
                el.classList.add('hidden');
                for (let item of title) {
                    item.classList.add('border-season-title');
                }
            }
        }
    }
}

let button = document.querySelectorAll('.info-btn');
let info_season = document.querySelectorAll('.info-season');
let id_text;

for (let el of button) {
    el.onclick = function () {
        el.nextElementSibling.classList.toggle('hidden');
        id_text = el.nextElementSibling.id;

        for (let el of info_season) {
            if (el.id != id_text) {
                el.classList.add('hidden');
            }
        }
    }
}