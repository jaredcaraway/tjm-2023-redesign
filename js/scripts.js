/**
 * Functions and event listeners for the navbar behavior.
 */
window.addEventListener('DOMContentLoaded', event => {
    // Function to shrink the navbar on scroll.
    const navbarShrink = () => {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) return;
        navbarCollapsible.classList[window.scrollY === 0 ? 'remove' : 'add']('navbar-shrink');
    };

    navbarShrink();  // Invoke on load.
    document.addEventListener('scroll', navbarShrink);  // Invoke on scroll.

    // Bootstrap scrollspy activation.
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    }

    // Collapse the responsive navbar when a nav link is clicked.
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [...document.querySelectorAll('#navbarResponsive .nav-link')];
    responsiveNavItems.forEach(navItem => {
        navItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Handle modal opening via keyboard for book items.
    const bookTriggers = document.querySelectorAll('.book-trigger');
    bookTriggers.forEach(trigger => {
        trigger.addEventListener('keydown', event => {
            if (event.key === 'Enter' || event.keyCode === 13) {
                const targetModalId = trigger.getAttribute('data-bs-target');
                const targetModal = document.querySelector(targetModalId);
                const modalInstance = new bootstrap.Modal(targetModal);
                const focusedElementBeforeModal = document.activeElement;
                modalInstance.show();
                targetModal.addEventListener('hidden.bs.modal', () => focusedElementBeforeModal.focus());
            }
        });
    });

    var carousel = document.querySelector('#carouselExampleIndicators');
    var items = carousel.querySelectorAll('.carousel-item');
    
    if (items.length <= 1) {
        carousel.classList.add('no-controls');
    }
});
