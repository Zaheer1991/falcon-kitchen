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