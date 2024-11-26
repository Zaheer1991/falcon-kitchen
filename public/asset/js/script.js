// Select the navbar
const navbar = document.getElementById('navbar');

// Add a scroll event listener
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('bg-white', 'shadow-md', 'bg-opacity-100'); // Solid white background
        navbar.classList.remove('bg-opacity-30','text-white'); // Remove transparency
    } else {
        navbar.classList.remove('bg-white', 'shadow-md', 'bg-opacity-100'); // Restore glassmorphism
        navbar.classList.add('bg-opacity-30','text-white');
    }
});

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
});
