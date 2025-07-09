//Cursor
const cursor = document.querySelector(".cursor");
const cursorFollower = document.querySelector(".cursor-follower");

let mouseX = window.innerWidth / 2;
let mouseY = window.innerHeight / 2;
let followerX = mouseX;
let followerY = mouseY;

// Track mouse position
document.addEventListener("mousemove", (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    cursor.style.left = `${mouseX}px`;
    cursor.style.top = `${mouseY}px`;
});

// Smooth follow animation
function animateFollower() {
    const delay = 0.15;

    followerX += (mouseX - followerX) * delay;
    followerY += (mouseY - followerY) * delay;

    cursorFollower.style.left = `${followerX}px`;
    cursorFollower.style.top = `${followerY}px`;

    requestAnimationFrame(animateFollower);
}

//ripple effect
document.addEventListener("click", (e) => {
    const ripple = document.createElement("div");
    ripple.classList.add("ripple");
    ripple.style.left = `${e.clientX}px`;
    ripple.style.top = `${e.clientY}px`;

    document.body.appendChild(ripple);

    ripple.addEventListener("animationend", () => {
        ripple.remove();
    });
});
animateFollower();

// Code Rain Effect
function createCodeRain() {
    const container = document.getElementById("bgRain");
    if (!container) return;
    container.innerHTML = "";
    // const symbols = ["ｱ", "ﾘ", "ｷ", "ｻ", "ﾀ", "ﾃ", "ﾎ", "ﾓ", "ﾕ", "ﾜ"];
    const symbols = ["∆", "≠", "∑", "λ", "Ω", "π", "∞", "√", "µ"];

    const rainCount = 100;

    for (let i = 0; i < rainCount; i++) {
        const digit = document.createElement("div");
        digit.className = "rain-element";
        digit.textContent = symbols[Math.floor(Math.random() * symbols.length)];

        digit.style.left = `${Math.random() * 100}%`;
        digit.style.top = `${-Math.random() * 100}px`;
        digit.style.opacity = Math.random() * 0.5 + 0.2;
        digit.style.fontSize = `${Math.random() * 1.5 + 0.8}rem`;
        digit.style.animationDuration = `${Math.random() * 5 + 5}s`;
        digit.style.animationDelay = `${Math.random() * 5}s`;

        container.appendChild(digit);
    }
}
document.addEventListener("DOMContentLoaded", createCodeRain);

// terminal

const terminalOutput = document.getElementById("terminalOutput");
const toggleBtn = document.getElementById("toggleBtn");
const restartBtn = document.getElementById("restartBtn");

const codeLines = [
    `<span class="comment">// 🚀 Booting up Dip’s Portfolio Engine</span>`,
    `<span class="keyword">import</span> <span class="default">React</span> <span class="keyword">from</span> <span class="string">'react'</span><span class="symbol">;</span>`,
    `<span class="keyword">import</span> <span class="default">AI</span> <span class="keyword">from</span> <span class="string">'./utils/chatgpt.js'</span><span class="symbol">;</span>`,
    `<span class="function">console</span>.<span class="method">log</span>(<span class="string">'🧠 Initializing neural modules...'</span>)<span class="symbol">;</span>`,
    `<span class="keyword">const</span> <span class="variable">user</span> = <span class="function">loadUser</span>(<span class="string">'dip_sarker.dev'</span>)<span class="symbol">;</span>`,
    `<span class="keyword">await</span> <span class="function">connectToDB</span>(<span class="string">'cluster0.mongodb.net/portfolio'</span>)<span class="symbol">;</span>`,
    `<span class="keyword">if</span> (<span class="symbol">!</span><span class="variable">user</span>) <span class="keyword">throw</span> <span class="keyword">new</span> <span class="class">Error</span>(<span class="string">'User not found ⚠️'</span>)<span class="symbol">;</span>`,
    `<span class="function">preloadAssets</span>([<span class="string">'projects'</span>, <span class="string">'testimonials'</span>, <span class="string">'contact'</span>])<span class="symbol">;</span>`,
    `<span class="function">renderComponent</span>(<span class="string">'<HeroSection />'</span>)<span class="symbol">;</span>`,
    `<span class="function">console</span>.<span class="method">info</span>(<span class="string">'✨ Interface is ready. Deploying animations...'</span>)<span class="symbol">;</span>`,
    `<span class="keyword">let</span> <span class="variable">ping</span> = <span class="function">setInterval</span>(<span class="function">heartbeat</span>, <span class="number">1000</span>)<span class="symbol">;</span>`,
    `<span class="comment">// 📡 Live telemetry streaming from Dip’s brain</span>`,
    `<span class="function">startService</span>(<span class="string">'project-highlighter'</span>)<span class="symbol">;</span>`,
    `<span class="function">console</span>.<span class="method">log</span>(<span class="string">'🛠️  Running diagnostics...'</span>)<span class="symbol">;</span>`,
    `<span class="function">validateUX</span>(<span class="symbol">()</span> => <span class="string">'🔥 User engagement optimal'</span>)<span class="symbol">;</span>`,
    `<span class="comment">// ✅ Everything is running smoother than expected</span>`,
    `<span class="function">console</span>.<span class="method">info</span>(<span class="string">'✅ Portfolio is live at https://dip-sarker.dev'</span>)<span class="symbol">;</span>`,
];

let index = 0;
let intervalId = null;
let isRunning = false;

function appendHighlightedLine(htmlString) {
    const line = document.createElement("div");
    line.innerHTML = htmlString;
    terminalOutput.appendChild(line);
    terminalOutput.scrollTop = terminalOutput.scrollHeight;
}

function startSimulation() {
    if (isRunning) return;
    isRunning = true;
    toggleBtn.textContent = "Pause";

    intervalId = setInterval(() => {
        appendHighlightedLine(codeLines[index]);
        index = (index + 1) % codeLines.length;
    }, 1000);
}

function pauseSimulation() {
    clearInterval(intervalId);
    isRunning = false;
    toggleBtn.textContent = "Resume";
}

function toggleSimulation() {
    isRunning ? pauseSimulation() : startSimulation();
}

function restartSimulation() {
    terminalOutput.innerHTML = "";
    index = 0;
    pauseSimulation();
    startSimulation();
}

toggleBtn.addEventListener("click", toggleSimulation);
restartBtn.addEventListener("click", restartSimulation);

startSimulation(); // Auto start on load

//weofgtoerktgf
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
    const scrollDuration = 3000; // 5 seconds

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
