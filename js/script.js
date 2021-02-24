"use strict"
/* Индекс слайда по умолчанию */
var slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция сладера */
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item");
    var dots = document.getElementsByClassName("slider-dots_item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";

    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " active";
}

var $cont = document.querySelector('.cont');
var $elsArr = [].slice.call(document.querySelectorAll('.el'));
var $closeBtnsArr = [].slice.call(document.querySelectorAll('.el__close-btn'));
var $teaching = [].slice.call(document.querySelectorAll('.teaching'));

setTimeout(function() {
  $cont.classList.remove('s--inactive');
}, 200);

$elsArr.forEach(function($el) {
  $el.addEventListener('click', function() {
    if (this.classList.contains('s--active')) return;
    $cont.classList.add('s--el-active');
    this.classList.add('s--active');
  });
});

$closeBtnsArr.forEach(function($btn) {
  $btn.addEventListener('click', function(e) {
    e.stopPropagation();
    $cont.classList.remove('s--el-active');
    document.querySelector('.el.s--active').classList.remove('s--active');
  });
});

let select = document.querySelector('.select-filter');
document.querySelectorAll('.button-value').forEach(b => {
    b.addEventListener('click', e => {
         select.value = e.target.value;
         select.dispatchEvent(new Event('change')); // Вызываем событие change
    });
})


document.addEventListener('DOMContentLoaded', function() {
    $(document).ready(function() {
        $("#phone").mask("+7-(999)-999-99-99");
      });
    const form = document.getElementById('form');
    const form_body = document.getElementById('form_body');
    const body = document.querySelectorAll('body');
    const popup = document.getElementById('popup');

    const popupCloseIcon = document.querySelectorAll('.close-popup');
    if (popupCloseIcon.length > 0) {
        for(let index = 0; index < popupCloseIcon.length; index++) {
            const el = popupCloseIcon[index];
            el.addEventListener('click', function(e ) {
                popupClose(el.closest(".popup"));
                e.preventDefault();
            }); 
        }
    }

    form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);

        let formData = new FormData(form);

        if (error === 0) {
            form_body.classList.add('sending');
            
            let response = await fetch('../function/mail.php', {
                method: 'POST',
                body: formData
            });

            if (response.ok) { 
                let result = await response.json();
                popupOpen(popup);
                form.reset();
                form_body.classList.remove('sending');
            }else {
                alert('Ошибка!');
                form_body.classList.remove('sending');
            }

        } else {
            alert("Заполните обязательные поля!");
        }
    }


        function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('.req');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if (input.classList.contains('email')) {
                if (emailTest(input)) {
                    formAddError(input);
                    error++;
                }
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;
                }
            }
        }
        return error;
    }

    function popupOpen(popup) {
            popup.classList.add('open');
            popup.addEventListener("click", function (e) {
                if (!e.target.closest('.popup_content')) {
                    popupClose(e.target.closest('.popup'));
                }
            });
        
    }

    

    function popupClose(popup) {
        popup.classList.remove('open');
    }

    function formAddError(input) {

        input.classList.add('_error');
    }
    function formRemoveError(input) {

        input.classList.remove('_error');
    }
    function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }
});