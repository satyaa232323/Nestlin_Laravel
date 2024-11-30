// / Navbar Responsive
const navToggle = document.getElementById('nav-toggle');
const navbar = document.querySelector('.navbar');

// Add event listener to toggle the navbar visibility
navToggle.addEventListener('click', () => {
    // Toggle the 'active' class on the navbar
    navbar.classList.toggle('active');
});