// javascript menu smart

let burger = document.querySelector('.toggle_burger');
let contains_smart = document.querySelector('.container_navbar_smart');

burger.addEventListener('click', () => {
    contains_smart.classList.toggle('open');
});