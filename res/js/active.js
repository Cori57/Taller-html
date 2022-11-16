//esta funcion sirve para activar el bortoncito para que despliegue le menu
document.addEventListener('DOMContentLoaded', () => {
    //llamando la funcion
    activeNavbarResponsive();
});
//FUNCION-- QUE FUNCIONE ALGO, ACTIVA ALGO
//esta funcion no está en bulma, es extra
function activeNavbarResponsive() {
    // Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
el.addEventListener('click', () => {

// Get the target from the "data-target" attribute
const target = el.dataset.target;
const $target = document.getElementById(target);

// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
el.classList.toggle('is-active');
$target.classList.toggle('is-active');

});
});
}