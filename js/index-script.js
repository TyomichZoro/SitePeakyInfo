let text = document.querySelector('#nikita-input');
let form = document.querySelector('#container');
let button = document.querySelector('#nikita-btn');

let modals = document.querySelectorAll('.fade-block');
let closeBtn = document.querySelectorAll('.close-btn');

text.hidden = true;

button.onclick = function () {
    button.textContent = 'Ввести';
    text.hidden = false;

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (text.value == 'Никита') {
            Check('well-modal', 'close-1');
        }
        if (text.value != 'Никита' && text.value.length != 0) {
            Check('bad-modal', 'close-2');
        }
    })
}

function BackValue() {
    text.hidden = true;
    button.textContent = 'Доп информация';
    text.value = null;
}

function Check(IDtext, IDbtn) {

    let modal;
    let close;

    for (let el of modals) {
        for (let item of closeBtn) {
            if (el.id == IDtext && item.id == IDbtn) {
                modal = el;
                close = item;
            }
        }
    }

    modal.classList.remove('hidden');

    let success = document.querySelector('.success-btn');

    success.onclick = function () {
        window.open('page_nikita.php', '_self');
        BackValue();
    }

    close.onclick = function () {
        modal.classList.add('hidden');
        BackValue();
    }

    modal.onclick = function () {
        modal.classList.add('hidden');
        BackValue();
    }

    modal.querySelector('.modal-window').addEventListener('click', function (e) {
        e.stopPropagation();
    })
}

let commentText = document.getElementsByTagName('textarea');
let commentBtn = document.querySelector('#close-comment');

for (let i = 0; i < commentText.length; i++) {
    commentText[i].setAttribute('style', 'height:' + (commentText[i].scrollHeight) + 'px;overflow-y:hidden;');
    commentText[i].addEventListener("input", OnInput, false);
}

function OnInput() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
}
let comment = document.querySelector('.comment-text');

commentBtn.onclick = function (e) {
    e.preventDefault();
    comment.value = null;
}
