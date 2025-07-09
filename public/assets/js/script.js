//preloader

const preloader = document.getElementById("preloader");
const mainContent = document.querySelector(".web-content");

function simulateLoading() {
    const progressBar = document.getElementById("progressBar");
    const loadingText = document.getElementById("loadingText");

    if (!progressBar || !loadingText) return;

    const messages = [
        "Warming up the brain cells...",
        "Crafting first impressions in HTML & CSS...",
        "Injecting creativity into every line...",
        "Building bridges between logic & art...",
        "Almost there — igniting final touches...",
        "Portfolio ready. Entering DIP’s arena...",
    ];

    let progress = 0;
    const interval = setInterval(() => {
        progress += Math.random() * 8;
        if (progress >= 100) {
            progress = 100;
            clearInterval(interval);
            setTimeout(() => {
                if (preloader) preloader.style.display = "none";
                if (mainContent) mainContent.style.display = "block";
            }, 1000);
        }

        progressBar.style.width = `${progress}%`;

        if (progress > 20 && progress < 30)
            loadingText.textContent = messages[1];
        else if (progress > 40 && progress < 50)
            loadingText.textContent = messages[2];
        else if (progress > 60 && progress < 70)
            loadingText.textContent = messages[3];
        else if (progress > 80 && progress < 90)
            loadingText.textContent = messages[4];
        else if (progress >= 99) loadingText.textContent = messages[5];
    }, 300);
}

window.addEventListener("load", () => {
    // if (preloader) preloader.style.display = "flex";
    // if (mainContent) mainContent.style.display = "none";
    // simulateLoading();
});

// Theme Toggle Functionality
const themeToggle = document.getElementById("themeToggle");
const body = document.body;

// Check for saved theme preference or respect OS preference
const savedTheme = localStorage.getItem("theme");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

// Set initial theme
if (savedTheme === "dark" || (!savedTheme && prefersDarkScheme.matches)) {
    body.classList.add("dark-mode");
    themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
} else {
    body.classList.remove("dark-mode");
    themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
}

// Toggle theme
themeToggle.addEventListener("click", () => {
    body.classList.toggle("dark-mode");

    if (body.classList.contains("dark-mode")) {
        themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        localStorage.setItem("theme", "dark");
    } else {
        themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
        localStorage.setItem("theme", "light");
    }
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
            document.querySelectorAll(".nav-links a").forEach((link) => {
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
const navLinks = document.querySelector(".nav-links");

mobileMenu.addEventListener("click", () => {
    navLinks.style.display =
        navLinks.style.display === "flex" ? "none" : "flex";
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

// Add mousemove effect to each .skill-category element
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

        container.style.transition = "transform 0.4s cubic-bezier(0.4,0,0.2,1)";
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
