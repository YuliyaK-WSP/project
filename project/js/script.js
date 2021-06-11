let preloaderEl = document.querySelector('.preloader');
preloaderEl.classList.add('stopping');
setTimeout(() => {
    preloaderEl.classList.remove('stopping');
    preloaderEl.classList.add('stop');
    checkShow()
}, 1000);
// Вылет анимации
function checkShow() {
    let animateShowEls = document.querySelectorAll('.animate-show');
    if (preloaderEl.classList.contains('stop')) {
        animateShowEls.forEach((el) => {

            let coord = el.getBoundingClientRect();
            // console.log(coord);
            if (coord.top <= window.innerHeight && coord.top > 0) {
                el.classList.add('show');
            }
        });
    }
}
window.addEventListener('scroll', () => {
    checkShow();
});
//AJAX запрос
document.querySelector('.signup-form').addEventListener('submit', function (e) {
    e.preventDefault();
    let name = this.name.value;
    let email = this.email.value;
    let action = this.action;

    let data = {
        name: name,
        email: email,
    }
    console.log(JSON.stringify(data));

    let xhr = new XMLHttpRequest();
    xhr.open(this.method, this.action);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(`data=${JSON.stringify(data)}`);

    this.querySelector('.btn').disabled = true;

    xhr.addEventListener('load', () => {
        let response = JSON.parse(xhr.responseText);

        if (response.result === 'success') {
            document.querySelector('.signup-header-message').style.display = 'flex';
            document.querySelector('.signup-header-message').innerHTML = xhr.responseText = "Ваши данные успешно отправлены, в ближайшее время мы с Вами свяжемся"
        } else {
            if (response.result === 'fail') {
                document.querySelector('.signup-header-message').style.display = 'flex';
                document.querySelector('.signup-header-message').innerHTML = xhr.responseText = "Что-то пошло не так";
            }
        }
    });
});

document.querySelector('.from-contact').addEventListener('submit', function (e) {
    e.preventDefault();
    let name = this.name.value;
    let email = this.email.value;
    let comment = this.comment.value;
    let action = this.action;

    let data = {
        name: name,
        email: email,
        comment: comment,
    }
    console.log(JSON.stringify(data));

    let xhr = new XMLHttpRequest();
    xhr.open(this.method, this.action);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(`data=${JSON.stringify(data)}`);

    this.querySelector('.button-form').disabled = true;

    xhr.addEventListener('load', () => {
        let response = JSON.parse(xhr.responseText);

        if (response.result === 'success') {
            document.querySelector('.contact-container-box-row-right-message').style.display = 'flex';
            document.querySelector('.contact-container-box-row-right-message').innerHTML = xhr.responseText = "Спасибо за ваш заказ скоро с Вами свяжется наш менеджер!"
        } else {
            if (response.result === 'fail') {
                document.querySelector('.contact-container-box-row-right-message').style.display = 'flex';
                document.querySelector('.contact-container-box-row-right-message').innerHTML = xhr.responseText = "Что-то пошло не так";
            }
        }
    });
});

let headerEl = document.querySelector('header');
let containerHeaderEl = document.querySelector('.container-header');
let iseeEls = document.querySelectorAll('.isee');
let arrowEl = document.querySelector('.scroll');

//Header в положение fixed
window.addEventListener('scroll', () => {
    checkShow();

    let coord = headerEl.getBoundingClientRect();
    let containerHeaderElCoord = containerHeaderEl.getBoundingClientRect();

    console.log('container-header', containerHeaderElCoord.bottom);

    window.addEventListener('scroll', () => {
        if (coord.top <= 0) {
            headerEl.classList.add('fixed');
            containerHeaderEl.classList.add('fixed');
        }
        if (containerHeaderElCoord.bottom > 0) {
            headerEl.classList.remove('fixed');
            containerHeaderEl.classList.remove('fixed');
        }
    });
});
//Активация ссылок
window.addEventListener('scroll', () => {
    let halfwindow = window.innerHeight / 2;
    let coord = iseeEls[0].getBoundingClientRect();
    // console.log(iseeEls);

    iseeEls.forEach((item) => {

        let coord = item.getBoundingClientRect();
        if (coord.top < halfwindow) {
            headerEl.querySelectorAll('.active').forEach((activeLink) => {
                activeLink.classList.remove('active');
            });
            headerEl.querySelector(`[href='#${item.id}']`).classList.add('active');
        }
    });
});
//Показ  arrow
window.addEventListener('scroll', () => {
    checkShow();

    let coord = arrowEl.getBoundingClientRect();
    let containerHeaderElCoord = containerHeaderEl.getBoundingClientRect();
    // console.log(coord);

    window.addEventListener('scroll', () => {
        if (containerHeaderElCoord.bottom > 0) {
            arrowEl.style.display = 'none';
            // console.log('склылся');
        }
        // console.log('container-header', containerHeaderElCoord.bottom);
        if (containerHeaderElCoord.bottom < 0) {
            arrowEl.style.display = 'flex';
            // console.log('элемент показался');
        }
    });
});