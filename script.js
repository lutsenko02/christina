var swiper = new Swiper(".mySwiper", {
  cssMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  mousewheel: true,
  keyboard: true,
});

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

let category = document.querySelector('.products__container-filter');
if (category) {
    category.onclick = function() {
     document.querySelector('.products__category-list-wp').classList.toggle("drop");
    }
}