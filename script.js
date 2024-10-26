window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    const content = document.getElementById('content');

    setTimeout(() => {
        preloader.style.display = 'none';
        content.style.display = 'block';
    }, 5000); // Display the preloader for 3 seconds
});
