// Theme Toggle Functionality
const themeToggle = document.getElementById("themeToggle");
const body = document.body;

// Check for saved theme preference or respect OS preference
const savedTheme = localStorage.getItem("theme");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

// Helper to update theme icon
function updateThemeUI(isDark) {
    themeToggle.innerHTML = isDark
        ? '<i class="fas fa-sun"></i>'
        : '<i class="fas fa-moon"></i>';
}

// Set initial theme
if (savedTheme === "dark" || (!savedTheme && prefersDarkScheme.matches)) {
    body.classList.add("dark-mode");
    updateThemeUI(true);
} else {
    body.classList.remove("dark-mode");
    updateThemeUI(false);
}

// Toggle theme
themeToggle.addEventListener("click", () => {
    const isDark = body.classList.toggle("dark-mode");
    localStorage.setItem("theme", isDark ? "dark" : "light");
    updateThemeUI(isDark);
});

// Header scroll effect
window.addEventListener("scroll", function () {
    const header = document.getElementById("header");
    if (window.scrollY > 50) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        if (targetId === "#") return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: "smooth",
            });

            // Update active link
            document.querySelectorAll('a[href^="#"]').forEach((link) => {
                link.classList.remove("active");
            });
            this.classList.add("active");
        }
    });
});

// Scroll animation
const fadeElements = document.querySelectorAll(".fade-in");

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("appear");
                observer.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.1,
    }
);

fadeElements.forEach((element) => {
    observer.observe(element);
});

// Mobile menu toggle
const mobileMenu = document.querySelector(".mobile-menu");
const mobileMenuItems = document.getElementById("mobile-menu-items");

mobileMenu.addEventListener("click", () => {
    const isOpen = mobileMenuItems.classList.toggle("show");

    // Toggle icon
    mobileMenu.innerHTML = isOpen
        ? '<i class="fa-regular fa-circle-xmark"></i>'
        : '<i class="fas fa-bars"></i>';
});

// Form submission
const contactForm = document.getElementById("contactForm");
if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Thank you for your message! I will get back to you soon.");
        this.reset();
    });
}

window.addEventListener("scroll", () => {
    const scrollProgress = document.getElementById("scroll-progress");
    const scrollTop =
        document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
    const scrollPercent = (scrollTop / scrollHeight) * 100;
    scrollProgress.style.width = scrollPercent + "%";
});

// Mousemove effect to each mouse-follower class
if (window.innerWidth >= 1120) {
    document.querySelectorAll(".mouse-follower").forEach((container) => {
        let moveX = 0;
        let moveY = 0;
        let currentX = 0;
        let currentY = 0;
        let animationFrame;

        const updatePosition = () => {
            // Smooth easing
            currentX += (moveX - currentX) * 0.1;
            currentY += (moveY - currentY) * 0.1;
            container.style.transform = `translate(${currentX}%, ${currentY}%)`;
            animationFrame = requestAnimationFrame(updatePosition);
        };

        container.addEventListener("mousemove", (e) => {
            const rect = container.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
            const y = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
            moveX = x * 20;
            moveY = y * 20;

            if (!animationFrame) {
                animationFrame = requestAnimationFrame(updatePosition);
            }
        });

        container.addEventListener("mouseleave", () => {
            moveX = 0;
            moveY = 0;

            container.style.transition =
                "transform 0.4s cubic-bezier(0.4,0,0.2,1)";
            container.style.transform = "translate(0, 0)";

            cancelAnimationFrame(animationFrame);
            animationFrame = null;
            currentX = 0;
            currentY = 0;

            // Reset transform after transition ends to avoid override by RAF
            container.addEventListener(
                "transitionend",
                () => {
                    container.style.transition = ""; // Remove transition after done
                },
                { once: true }
            );
        });
    });
}

// Skills Tab Functionality
const tabBtns = document.querySelectorAll(".tab-btn");
const skillContainers = document.querySelectorAll(".skills-container");

tabBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        const tabId = this.getAttribute("data-tab");

        // Update active tab
        tabBtns.forEach((b) => b.classList.remove("active"));
        this.classList.add("active");

        // Show active container
        skillContainers.forEach((container) => {
            container.classList.remove("active");
            if (container.id === `${tabId}-skills`) {
                container.classList.add("active");
            }
        });
    });
});

// Animate skill cards on page load
const skillCards = document.querySelectorAll(".skill-card");
skillCards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.1}s`;
});

//CaraosalProject
document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("projectsContainer");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const progressBar = document.getElementById("projectProgressBar");
    const indicators = document.querySelectorAll(".indicator");
    const cards = container.querySelectorAll(".project-card");
    const cardCount = cards.length;
    let currentIndex = 0; // Start with center card active
    let autoScrollInterval;
    let progress = 0;
    const scrollDuration = 5000; // 5 seconds

    // Add margins to first and last cards
    cards[0].style.marginLeft = "100px";
    cards[cardCount - 1].style.marginRight = "100px";

    // Initialize carousel
    centerActiveCard();

    // Function to center the active card
    function centerActiveCard() {
        // Remove active class from all cards
        cards.forEach((card) => card.classList.remove("active"));

        // Add active class to current card
        cards[currentIndex].classList.add("active");

        // Update indicators
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle("active", index === currentIndex);
        });

        // Calculate container padding to center active card
        const containerWidth = container.offsetWidth;
        const cardWidth = cards[0].offsetWidth;
        const gap = 50; // Same as CSS gap

        // Calculate the total offset caused by the first card's margin
        const marginOffset = 100;

        // Calculate scroll position to perfectly center the active card
        // Accounting for the 100px left margin on the first card
        const scrollPosition =
            marginOffset +
            (cardWidth + gap) * currentIndex -
            (containerWidth / 2 - cardWidth / 2);

        container.scrollTo({
            left: scrollPosition,
            behavior: "smooth",
        });
    }

    // Function to go to next card
    function nextCard() {
        currentIndex = (currentIndex + 1) % cardCount;
        centerActiveCard();

        // Reset progress bar
        progress = 0;
        progressBar.style.width = "0%";
    }

    // Function to go to previous card
    function prevCard() {
        currentIndex = (currentIndex - 1 + cardCount) % cardCount;
        centerActiveCard();

        // Reset progress bar
        progress = 0;
        progressBar.style.width = "0%";
    }

    // Function to update progress bar
    function updateProgressBar() {
        progress += 100 / (scrollDuration / 100);
        progressBar.style.width = `${progress}%`;

        if (progress >= 100) {
            nextCard();
        }
    }

    // Start auto-scroll
    function startAutoScroll() {
        autoScrollInterval = setInterval(updateProgressBar, 100);
    }

    // Stop auto-scroll when user interacts
    function stopAutoScroll() {
        clearInterval(autoScrollInterval);
        progressBar.style.width = "0%";
    }

    // Resume auto-scroll after user interaction
    function resumeAutoScroll() {
        startAutoScroll();
    }

    // Event listeners
    prevBtn.addEventListener("click", function () {
        stopAutoScroll();
        prevCard();
        setTimeout(resumeAutoScroll, 5000);
    });

    nextBtn.addEventListener("click", function () {
        stopAutoScroll();
        nextCard();
        setTimeout(resumeAutoScroll, 5000);
    });

    // Indicator click events
    indicators.forEach((indicator) => {
        indicator.addEventListener("click", function () {
            stopAutoScroll();
            currentIndex = parseInt(this.getAttribute("data-index"));
            centerActiveCard();
            setTimeout(resumeAutoScroll, 5000);
        });
    });

    // Pause auto-scroll when hovering over carousel
    container.addEventListener("mouseenter", stopAutoScroll);
    container.addEventListener("mouseleave", resumeAutoScroll);

    // Start auto-scroll on page load
    startAutoScroll();

    // Recenter on window resize
    window.addEventListener("resize", centerActiveCard);
});
