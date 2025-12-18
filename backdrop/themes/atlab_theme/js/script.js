/**
 * @file
 * Custom scripts for ATLAB Theme.
 */

(function ($) {
    // Use strict mode to avoid common errors
    'use strict';

    // Intersection Observer for Scroll Animations
    document.addEventListener('DOMContentLoaded', function () {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, observerOptions);

        // Select all elements to animate
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        animatedElements.forEach(el => observer.observe(el));

        // Also animate cards if their parent is animated, using stagger
        // This part is handled via CSS delays usually, but we ensure the parent triggers it.
    });

    // Mobile Menu Toggle
    document.addEventListener('click', function (e) {
        if (e.target.closest('.mobile-menu-toggle')) {
            const menu = document.querySelector('.header-nav');
            // For a simple toggle, specific implementation depends on CSS, 
            // but here we can toggle a class on the body or header
            document.body.classList.toggle('mobile-menu-open');
        }
    });

})(jQuery);
