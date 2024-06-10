// let cards = document.querySelectorAll('.card');
// let leftBtn = document.getElementById('left-btn')
// let rightBtn = document.getElementById('right-btn')
// let cardsCount = cards.length;

// leftBtn.addEventListener('click', function() {
//     setTimeout(function (){

//         cards[0].style.left = '-890px';

//         setTimeout(function (){

//             cards[1].className = 'card bg-white shadow-lg rounded-2xl p-5 w-[870px] h-[300px] text-center absolute left-[-400px] top-[200px]'

//             setTimeout(function (){

//                 cards[2].className = 'card bg-white shadow-lg rounded-2xl p-5 w-[870px] h-[300px] text-center absolute left-[50%] translate-x-[-50%] top-[200px]'
//             },70)
//         },60)
//     },80)
//     // cards[1].style.left = '-400px';
// })
// rightBtn.addEventListener('click', function() {


//     cards[0].style.left = '-400px';
//     cards[1].className = 'card bg-white shadow-lg rounded-2xl p-5 w-[870px] h-[300px] text-center absolute left-[50%] translate-x-[-50%] top-[200px]'
//     cards[2].className = 'card bg-white shadow-lg rounded-2xl p-5 w-[870px] h-[300px] text-center absolute right-[-400px] top-[200px]'
// })


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 28,
    centeredSlides: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: false,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 28,
            centeredSlides: true,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 32,
        },
    },
    autoplay: {
        delay: 2000,
      },
});