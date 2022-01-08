const hamburger = document.querySelector('.hamburger');
const Click = () => {
    hamburger.classList.toggle('hamburger--active');
}
hamburger.addEventListener('click',Click);