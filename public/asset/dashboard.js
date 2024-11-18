document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    const scrollToTopButton = document.getElementById("scroll-to-top");

    // Add Click Event to Mobile Menu Button
    menuButton.addEventListener("click", () => {
        const isExpanded =
            menuButton.getAttribute("aria-expanded") === "true";
        menuButton.setAttribute("aria-expanded", !isExpanded);
        mobileMenu.classList.toggle("hidden");
    });

    // Scroll to Top Button Functionality
    scrollToTopButton.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });

    // Show main content after 5 seconds
    setTimeout(() => {
        const preloader = document.getElementById("preloader");
        const content = document.getElementById("main-content");

        preloader.style.display = "none"; // Hide the preloader
        content.style.display = "block"; // Show the content
        content.style.opacity = "1"; // Show the content with fade-in effect

        // Trigger scroll animation for equipment items
        const items = document.querySelectorAll(".item");
        items.forEach((item, index) => {
            setTimeout(() => {
                item.classList.remove("opacity-0", "translate-y-10");
            }, index * 300); // Stagger animation
        });
    }, 2000); // 5000 milliseconds = 5 seconds

    // Scrolling effect for the navbar
    window.addEventListener("scroll", () => {
        const navbar = document.getElementById("navbar");
        const offset = window.scrollY;

        if (offset > 0) {
            navbar.classList.add("shadow-md");
        } else {
            navbar.classList.remove("shadow-md");
        }

        // Show/hide the scroll-to-top button based on scroll position
        if (offset > 300) {
            scrollToTopButton.classList.remove("hidden");
        } else {
            scrollToTopButton.classList.add("hidden");
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
const section = document.querySelector('.about-section');

const options = {
root: null, // Use the viewport as the root
threshold: 0.1 // Trigger when 10% of the section is visible
};

const observer = new IntersectionObserver((entries) => {
entries.forEach(entry => {
    if(entry.isIntersecting) {
        entry.target.classList.add('visible'); // Add the visible class when in view
        observer.unobserve(entry.target); // Stop observing after adding class
    }
});
}, options);

observer.observe(section); // Observe the About section
});
