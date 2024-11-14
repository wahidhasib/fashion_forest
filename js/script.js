


// animation with mixitup

var mixer = mixitup('.shop_products');

let shopBars = document.querySelector('.shop_bars .fa-list');
let shopMenu = document.querySelector('.shop_menus');
let shopMenuLink = document.querySelector('.shop_menu_link');

shopBars.addEventListener('click', () => {
    shopMenu.classList.toggle('show_shop_menu');
});
