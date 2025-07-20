// Wait until DOM is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".db-nav-links li a");

    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            // Remove class from all links
            navLinks.forEach((l) => l.classList.remove("list-active"));

            // Add class to the clicked one
            this.classList.add("list-active");
        });
    });
});
