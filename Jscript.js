// Подсписок открывать шоб
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    $('.dropdown-submenu a.dropdown-toggle').on("click", function (e) {
        e.stopPropagation();
        e.preventDefault();
        if (!$(this).next('.dropdown-menu').hasClass('show')) {
            $('.dropdown-menu .show').removeClass("show");
        }
        $(this).next('.dropdown-menu').toggleClass('show');
    });

    // Закрыть подменю при клике вне меню
    $(document).on("click", function (e) {
        if (!$(e.target).closest('.dropdown-menu').length) {
            $('.dropdown-menu .show').removeClass("show");
        }
    });
});


// Карусель-слайдер изображений для Home Page
document.addEventListener("DOMContentLoaded", function () { // Инициализация слайдеров
    initializeSlider('dmc-slider');  // Инициализация для первой карусели
    initializeSlider('mgr-slider');  // Инициализация для второй карусели
});

// Карусель-слайдер изображений для Home Page
document.addEventListener("DOMContentLoaded", function () { // Инициализация слайдеров
    initializeSlider('dmc-slider');  // Инициализация для первой карусели
    initializeSlider('mgr-slider');  // Инициализация для второй карусели
});

function initializeSlider(sliderId) {
    const slides = document.querySelectorAll(`#${sliderId} .slides img`);
    let slideIndex = 0;
    let intervalId = setInterval(idleNextSlide, 3000);

    // Показываем первый слайд при загрузке
    if (slides.length > 0) {
        slides[slideIndex].classList.add("displaySlide");
    }

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove("displaySlide"));
        if (index >= slides.length) {
            slideIndex = 0;
        } else if (index < 0) {
            slideIndex = slides.length - 1;
        }
        slides[slideIndex].classList.add("displaySlide");
    }

    function idleNextSlide() {
        slideIndex++;
        showSlide(slideIndex);
    }

    function prevSlide() {
        clearInterval(intervalId);
        slideIndex--;
        showSlide(slideIndex);
    }

    function nextSlide() {
        clearInterval(intervalId);
        slideIndex++;
        showSlide(slideIndex);
    }


    // Присваиваем обработчики кнопкам внутри текущей(КАЖДОЙ) карусели
    document.querySelector(`#${sliderId} .prev`).onclick = prevSlide;
    document.querySelector(`#${sliderId} .next`).onclick = nextSlide;
}


// Кнопка Submit в Contact Page
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Останавливаем стандартное поведение отправки формы

        // Спрашиваем у пользователя подтверждение отправки
        const userConfirmed = confirm("Are you sure you want to submit the message?");

        if (userConfirmed) {
            // Если пользователь подтвердил, выводим сообщение об отправке
            alert("You have successfully submitted the message!");

            // Здесь можно добавить логику для отправки формы на сервер, если потребуется
            form.submit(); // Эта строка отправляет форму (если нужно)
        } else {
            // Если пользователь отменил отправку
            alert("Submission canceled.");
        }
    });
});


// Работа с регалкой и модальное окно
document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.querySelector('.wrapper');
    const btnPopup = document.querySelector('.btnLogin-popup');
    const iconClose = document.querySelector('.icon-close');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');

    // Создаем overlay
    const overlay = document.createElement('div');
    overlay.className = 'overlay';
    document.body.appendChild(overlay);

    // Открытие модального окна
    btnPopup.addEventListener('click', () => {
        wrapper.classList.add('active-popup');
        overlay.classList.add('active');
        console.log("Модальное окно открыто");
    });

    // Закрытие модального окна через кнопку закрытия
    iconClose.addEventListener('click', () => {
        console.log("Кнопка закрытия нажата");
        wrapper.classList.remove('active-popup');
        overlay.classList.remove('active');
    });

    // Закрытие при клике на overlay
    overlay.addEventListener('click', () => {
        wrapper.classList.remove('active-popup');
        overlay.classList.remove('active');
    });

    registerLink.addEventListener('click', () => {
        wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', () => {
        wrapper.classList.remove('active');
    });
});

function goToPage(pageUrl) {
    window.location.href = pageUrl;
}




