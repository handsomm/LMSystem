const sidemenu = document.querySelector("aside");
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");

const themeToggler = document.querySelector(".theme-toggler");

menuBtn.addEventListener('click', () => {
    sidemenu.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    sidemenu.style.display = 'none';
});

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
});

let popup = document.getElementById('popup');

function openPopup() {
    popup.classList.add("open-popup");
}

function closePopup() {
    popup.classList.remove("open-popup");
}