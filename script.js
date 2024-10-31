

window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    const content = document.getElementById('content');

    setTimeout(() => {
        preloader.style.display = 'none';
        content.style.display = 'block';
    }, 3000); // Display the preloader for 3 seconds
});


// Navbar toggle

// document.getElementById("mobile-menu").addEventListener("click", function() {
//     var nav = document.querySelector(".nav ul");
//     nav.classList.toggle("show");
// });





