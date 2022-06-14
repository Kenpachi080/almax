// форма отправки
const btn = document.querySelector(".li_btn");
const headerBtnTwo = document.querySelector(".header_btn__two");
const footerRightBtn = document.querySelector(".footer_right__btn");
const ContactSection = document.querySelector(".Contact_section");

btn.onclick = () => {sendForms()};
footerRightBtn.onclick = () => {sendForms()};
headerBtnTwo.onclick = () => {sendForms()};

function sendForms(){
    ContactSection.style.display = "flex";
    mainContent.style.height = "100.1vh";
}

const closeBtn = document.querySelector(".close_btn");
closeBtn.onclick = ()=>{
    ContactSection.style.display = "none";
    writheContents.style.display = "flex";
    writheContents.style.flexDirection = "column";
    sendContents.style.display = "none";
    lname.value = "";
    mainContent.style.height = "auto";
}

const btnSend = document.querySelector(".btn_send");
const writheContents = document.querySelector(".writhe_contents");
const sendContents = document.querySelector(".send_contents");

btnSend.onclick = ()=>{
    writheContents.style.display = "none";
    sendContents.style.display = "flex";
}


const sendContentBtnHome = document.querySelector(".send_content_btnHome");

sendContentBtnHome.onclick = ()=>{
    ContactSection.style.display = "none";
    writheContents.style.display = "flex";
    writheContents.style.flexDirection = "column";
    sendContents.style.display = "none";
    lname.value = "";
    mainContent.style.height = "auto";
}

// const lname = document.querySelector("#lname");

// lname.onclick = ()=>{
//     lname.value = "+7";
// }
const mainContent = document.querySelector(".main_content");


// header 
const btnTransportClose = document.querySelector(".btnTransport_close");
const TransportTextImgClose = document.querySelector(".Transport_textImg_close");
const header = document.querySelector("header");

btnTransportClose.onclick = () => {
    if (btnTransportClose.innerHTML == "Подробнее") {
        TransportTextImgClose.classList.add("active");
        header.classList.add("active");
        btnTransportClose.innerHTML = "Скрыть";
        TransportTextImgClose.classList.remove("close");
        header.classList.remove("close");
    } else if (btnTransportClose.innerHTML == "Скрыть") {
        TransportTextImgClose.classList.add("close");
        header.classList.add("close");
        btnTransportClose.innerHTML = "Подробнее";
        TransportTextImgClose.classList.remove("active");
        header.classList.remove("active");
    }
}
TransportTextImgClose.onclick = ()=>{
    Visible(element);
}
// animation two block
// Получаем нужный элемент
const element = document.querySelector('.Project_box__cheked');

let Visible = function(target) {
    // Все позиции элемента
    let targetPosition = {
            top: window.pageYOffset + target.getBoundingClientRect().top,
            left: window.pageXOffset + target.getBoundingClientRect().left,
            right: window.pageXOffset + target.getBoundingClientRect().right,
            bottom: window.pageYOffset + target.getBoundingClientRect().bottom
        },
        // Получаем позиции окна
        windowPosition = {
            top: window.pageYOffset,
            left: window.pageXOffset,
            right: window.pageXOffset + document.documentElement.clientWidth,
            bottom: window.pageYOffset + document.documentElement.clientHeight
        };

    if (targetPosition.bottom > windowPosition.top && // Если позиция нижней части элемента больше позиции верхней чайти окна, то элемент виден сверху
        targetPosition.top < windowPosition.bottom && // Если позиция верхней части элемента меньше позиции нижней чайти окна, то элемент виден снизу
        targetPosition.right > windowPosition.left && // Если позиция правой стороны элемента больше позиции левой части окна, то элемент виден слева
        targetPosition.left < windowPosition.right) { // Если позиция левой стороны элемента меньше позиции правой чайти окна, то элемент виден справа
        // Если элемент полностью видно, то запускаем следующий код
        console.clear();
        console.log('Вы видите элемент :)');
        element.classList.remove("close");
        element.classList.add("active");
    } else {
        // Если элемент не видно, то запускаем этот код
        console.clear();
        element.classList.remove("active");
        element.classList.add("close");
    };
};

// Запускаем функцию при прокрутке страницы
window.addEventListener('scroll', function() {
    Visible(element);
});

// А также запустим функцию сразу. А то вдруг, элемент изначально видно
Visible(element);
const elementTwo = document.querySelector('.transportation_section');
const transportationFooterTitle = document.querySelector('.transportation_footer__title');
let VisibleTwo = function(target) {
    // Все позиции элемента
    var targetPosition = {
            top: window.pageYOffset + target.getBoundingClientRect().top,
            left: window.pageXOffset + target.getBoundingClientRect().left,
            right: window.pageXOffset + target.getBoundingClientRect().right,
            bottom: window.pageYOffset + target.getBoundingClientRect().bottom
        },
        // Получаем позиции окна
        windowPosition = {
            top: window.pageYOffset,
            left: window.pageXOffset,
            right: window.pageXOffset + document.documentElement.clientWidth,
            bottom: window.pageYOffset + document.documentElement.clientHeight
        };

    if (targetPosition.bottom > windowPosition.top &&
        targetPosition.top < windowPosition.bottom &&
        targetPosition.right > windowPosition.left &&
        targetPosition.left < windowPosition.right) {
        elementTwo.classList.remove("close");
        elementTwo.classList.add("active");
        transportationFooterTitle.style.display = "flex";
    } else {
        elementTwo.classList.remove("active");
        elementTwo.classList.add("close");
        transportationFooterTitle.style.display = "none";
    };
};
window.addEventListener('scroll', function() {
    VisibleTwo(elementTwo);
});
VisibleTwo(elementTwo);
// Industry Solutions box three
const oneRightBtn = document.querySelector(".one_right__btn");
const btnCloseBlock = document.querySelector(".btn_close_block");
const SolutionsBoxContent = document.querySelector(".Solutions_box__content");
const SolutionsBoxBackground = document.querySelector(".Solutions_box__background");
const IndustrySolutionsBox = document.querySelector(".Industry_Solutions__box");
const boxContentTwo = document.querySelector(".box_content__two");
oneRightBtn.onclick = () => {
    oneRightBtn.classList.add("active");
    IndustrySolutionsBox.classList.add("active");
    SolutionsBoxContent.classList.add("active");
    SolutionsBoxBackground.classList.add("active");
    IndustrySolutionsBox.classList.remove("close");
    SolutionsBoxContent.classList.remove("close");
    SolutionsBoxBackground.classList.remove("close");
    boxContentTwo.style.display = "flex";
    btnCloseBlock.style.display = "flex";
}

btnCloseBlock.onclick = () => {
    IndustrySolutionsBox.classList.add("close");
    SolutionsBoxContent.classList.add("close");
    SolutionsBoxBackground.classList.add("close");
    IndustrySolutionsBox.classList.remove("active");
    SolutionsBoxContent.classList.remove("active");
    SolutionsBoxBackground.classList.remove("active");
    oneRightBtn.classList.remove("active");
    VisibleThree(TestEquipmentContainer);
}

// Test equipment box
const TestEquipmentContainer = document.querySelector('.Test_equipment__container');
let VisibleThree = function(target) {
    // Все позиции элемента
    var targetPosition = {
            top: window.pageYOffset + target.getBoundingClientRect().top,
            left: window.pageXOffset + target.getBoundingClientRect().left,
            right: window.pageXOffset + target.getBoundingClientRect().right,
            bottom: window.pageYOffset + target.getBoundingClientRect().bottom
        },
        // Получаем позиции окна
        windowPosition = {
            top: window.pageYOffset,
            left: window.pageXOffset,
            right: window.pageXOffset + document.documentElement.clientWidth,
            bottom: window.pageYOffset + document.documentElement.clientHeight
        };

    if (targetPosition.bottom > windowPosition.top &&
        targetPosition.top < windowPosition.bottom &&
        targetPosition.right > windowPosition.left &&
        targetPosition.left < windowPosition.right) {
        TestEquipmentContainer.classList.remove("close");
        TestEquipmentContainer.classList.add("active");
    } else {
        TestEquipmentContainer.classList.remove("active");
        TestEquipmentContainer.classList.add("close");
    };
};
window.addEventListener('scroll', function() {
    VisibleThree(TestEquipmentContainer);
});
VisibleThree(TestEquipmentContainer);

// burger animation
const burgerImg = document.querySelector(".burger_img");
const burgerImgClose = document.querySelector(".burger_img__close");
const navList = document.querySelector(".nav_list");

burgerImg.onclick = () => {
    console.log("yes")
    navList.classList.add("active");
    navList.classList.remove("close");
    burgerImg.style.display = "none";
    burgerImgClose.style.display = "flex";
}

burgerImgClose.onclick = () => {
    navList.classList.add("close");
    navList.classList.remove("active");
    burgerImgClose.style.display = "none";
    burgerImg.style.display = "flex";
}



window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('#lname'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+7 (___) ___-__-__",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)

  });

});

// плавный скрол

document.querySelectorAll('a[href^="#"').forEach(link => {

    link.addEventListener('click', function(e) {
        e.preventDefault();
        let href = this.getAttribute('href').substring(1);
        const scrollTarget = document.getElementById(href);
        const topOffset = 80; // если не нужен отступ сверху 
        const elementPosition = scrollTarget.getBoundingClientRect().top;
        const offsetPosition = elementPosition - topOffset;

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});
