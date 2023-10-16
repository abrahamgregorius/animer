const navToggle = document.getElementById('nav-toggle')
const navRight = document.getElementById('nav-right')

navToggle.addEventListener('click', () => {
    navRight.classList.toggle('show')
})