document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('menuToggle');
    const nav = document.querySelector('nav');
    if (!toggle) return console.warn('menuToggle not found');
    if (!nav) return console.warn('nav element not found');

    // Ensure initial aria state
    toggle.setAttribute('aria-expanded', 'false');

    toggle.addEventListener('click', function () {
        const active = nav.classList.toggle('active');
        toggle.setAttribute('aria-expanded', String(!!active));
    });
});