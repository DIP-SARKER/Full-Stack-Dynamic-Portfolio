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

    const rainCount = 50;

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
        progress += Math.random() * 18;
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

window.addEventListener("DOMContentLoaded", () => {
    // if (mainContent) mainContent.style.display = "none";
    // if (preloader) preloader.style.display = "flex";
    // simulateLoading();
});

// terminal

const terminalOutput = document.getElementById("terminalOutput");
const toggleBtn = document.getElementById("toggleBtn");
const restartBtn = document.getElementById("restartBtn");

const codeLines = [
    `<span class="comment">// 🚀 Launch sequence initiated: Dip Sarker’s Portfolio v2.5</span>`,
    `<span class="keyword">import</span> <span class="default">NextGenUI</span> <span class="keyword">from</span> <span class="string">'./components/HeroSection'</span><span class="symbol">;</span>`,
    `<span class="keyword">import</span> <span class="default">GPTSupport</span> <span class="keyword">from</span> <span class="string">'./utils/ai-assist.js'</span><span class="symbol">;</span>`,
    `<span class="function">console</span>.<span class="method">log</span>(<span class="string">'🧠 Activating intelligent UI systems...'</span>)<span class="symbol">;</span>`,
    `<span class="keyword">const</span> <span class="variable">visitor</span> = <span class="function">initializeUserSession</span>(<span class="string">'dip-sarker.dev'</span>)<span class="symbol">;</span>`,
    `<span class="keyword">await</span> <span class="function">connectDatabase</span>(<span class="string">'portfolioCluster.mongodb.net'</span>)<span class="symbol">;</span>`,
    `<span class="keyword">if</span> (<span class="symbol">!</span><span class="variable">visitor</span>) <span class="keyword">throw</span> <span class="keyword">new</span> <span class="class">AccessError</span>(<span class="string">'Unrecognized visitor - Access Denied 🛑'</span>)<span class="symbol">;</span>`,
    `<span class="function">loadModules</span>([<span class="string">'Projects'</span>, <span class="string">'Skills'</span>, <span class="string">'ContactForm'</span>])<span class="symbol">;</span>`,
    `<span class="function">renderComponent</span>(<span class="string">'<IntroBanner animated />'</span>)<span class="symbol">;</span>`,
    `<span class="function">console</span>.<span class="method">info</span>(<span class="string">'🎨 Designing with personality and precision...'</span>)<span class="symbol">;</span>`,
    `<span class="keyword">let</span> <span class="variable">heartbeat</span> = <span class="function">setInterval</span>(<span class="function">pingVisitor</span>, <span class="number">1200</span>)<span class="symbol">;</span>`,
    `<span class="comment">// 🧭 Mapping your journey through skills, projects, and passion</span>`,
    `<span class="function">startService</span>(<span class="string">'realTimeHighlights'</span>)<span class="symbol">;</span>`,
    `<span class="function">console</span>.<span class="method">log</span>(<span class="string">'🧪 Running accessibility & performance diagnostics...'</span>)<span class="symbol">;</span>`,
    `<span class="function">checkEngagement</span>(<span class="symbol">()</span> => <span class="string">'📈 Metrics looking strong — users are loving it!'</span>)<span class="symbol">;</span>`,
    `<span class="comment">// ✅ Systems green — portfolio engine stable & optimized</span>`,
    `<span class="function">console</span>.<span class="method">info</span>(<span class="string">'✅ Deployed successfully at https://dip-sarker.dev'</span>)<span class="symbol">;</span>`,
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
