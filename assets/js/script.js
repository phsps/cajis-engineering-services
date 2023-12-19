
// End Navigation

const swiper1 = new Swiper('.swiper', {
    autoHeight: true,
    loop: true,
    autoplay: true,
    items: 3,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    });





// filter card according to category

const filters_cat = document.querySelectorAll(".filter-btn");

let active_cards = document.querySelectorAll(
    ".project-slider .swiper-slide:not(.d-none)"
);

filters_cat.forEach((filter) => {
    filter.addEventListener("click", function () {
        filters_cat.forEach((filter) => {
            filter.classList.remove("btn-active");
        });
        this.classList.add("btn-active");
        const category = this.dataset.cat;
        const card = document.querySelectorAll(".project-slider .swiper-slide");
        active_cards.forEach((card, index) => {
            card.classList.add("d-none");
        });
        let selectedcat;
        if (category == "all") {
            selectedcat = document.querySelectorAll(`.project-slider .swiper-slide`);
        } else {
            selectedcat = document.querySelectorAll(`[data-${category}]`);
        }

        let numberItems;

        if (selectedcat.length >= 4) {
            numberItems = 4;
        } else {
            numberItems = selectedcat.length;
        }

        for (let index = 0; index <= numberItems - 1; index++) {
            selectedcat[index].classList.remove("d-none");
        }

        const cards_count = document.querySelectorAll(
            ".project-slider .swiper-slider:not(.d-none)"
        );
        if (cards_count.length == 0) {
            document.querySelector("no-results").classList.remove("d-none");
        } else {
            document.querySelector(".no-results").classList.add("d-none");
        }
    });
});
//End filter card according to category

/* =========== Show Menu ========*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}


/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav_link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


