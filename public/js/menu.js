document.addEventListener("DOMContentLoaded", function() {
    const openMenuButton = document.getElementById('open-menu');
    const closeMenuButton = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    openMenuButton.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    closeMenuButton.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
});
