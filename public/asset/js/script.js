// Set a timeout to hide the preloader and show the main content
setTimeout(() => {
    const preloader = document.getElementById("preloader");
    const content = document.getElementById("main-content");

    preloader.style.display = "none"; // Hide the preloader
    content.style.display = "block"; // Display the main content
    content.style.opacity = "1"; // Add fade-in effect to the content

    // Animate equipment items with a staggered effect
    const items = document.querySelectorAll(".item");
    items.forEach((item, index) => {
        setTimeout(() => {
            item.classList.remove("opacity-0", "translate-y-10"); // Remove animation classes
        }, index * 300); // Stagger animation by 300ms
    });
}, 2000); // Delay of 2 seconds

// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    const scrollToTopButton = document.getElementById("scroll-to-top");

    // Mobile Menu Toggle Functionality
    menuButton.addEventListener("click", () => {
        const isExpanded = menuButton.getAttribute("aria-expanded") === "true";
        menuButton.setAttribute("aria-expanded", !isExpanded); // Toggle the aria-expanded attribute
        mobileMenu.classList.toggle("hidden"); // Show/hide the mobile menu
    });

    // Scroll to Top Button Functionality
    scrollToTopButton.addEventListener("click", () => {
        window.scrollTo({
            top: 0, // Scroll to the top of the page
            behavior: "smooth", // Smooth scrolling effect
        });
    });

    // Navbar Shadow and Scroll-to-Top Button Behavior
    window.addEventListener("scroll", () => {
        const navbar = document.getElementById("navbar");
        const offset = window.scrollY; // Get the vertical scroll position

        // Add or remove shadow from the navbar
        if (offset > 0) {
            navbar.classList.add("shadow-md");
        } else {
            navbar.classList.remove("shadow-md");
        }

        // Show or hide the scroll-to-top button
        if (offset > 300) {
            scrollToTopButton.classList.remove("hidden");
        } else {
            scrollToTopButton.classList.add("hidden");
        }
    });

    // Observer to Trigger About Section Animation
    const section = document.querySelector('.about-section');
    const options = {
        root: null, // Use the viewport as the root
        threshold: 0.1 // Trigger when 10% of the section is visible
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // Add 'visible' class when in view
                observer.unobserve(entry.target); // Stop observing after animation
            }
        });
    }, options);

    observer.observe(section); // Start observing the About section
});

// Swiper initialization
document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        effect: 'fade', // Fade effect for smoother slide transitions
        fadeEffect: {
            crossFade: true, // Smooth crossfade effect
        },
        speed: 1500, // Speed of the transition
        on: {
            slideChangeTransitionStart: function () {
                // Remove active class from all slides
                this.slides.forEach(slide => {
                    slide.classList.remove('active');
                });
            },
            slideChangeTransitionEnd: function () {
                // Add active class to the new active slide
                const activeSlide = this.slides[this.activeIndex];
                activeSlide.classList.add('active');
            }
        },
    });
});