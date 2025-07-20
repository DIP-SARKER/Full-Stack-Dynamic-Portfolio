<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#home" class="logo" title="Forged in passion, refined with soul 💜">
                    <svg id="logo-svg" class="logo-svg" xmlns="http://www.w3.org/2000/svg" width="80"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 947.58 553.27">
                        <path
                            d="M785.4,0c-1.9,0-3.79.03-5.68.1h-124.01c-13.81,0-25.01,11.2-25.01,25.01v345.54c0,13.81,11.2,25.01,25.01,25.01h107.04c13.81,0,25.01-11.2,25.01-25.01v-46.32c88.48-1.26,159.81-73.38,159.81-162.16S874.97,0,785.4,0ZM787.77,248.1c-46.14,0-83.54-37.4-83.54-83.54s37.4-83.55,83.54-83.55,83.55,37.41,83.55,83.55-37.41,83.54-83.55,83.54Z" />
                        <rect x="402.22" y="196.94" width="164.56" height="356.33" rx="27.66" ry="27.66" />
                        <path
                            d="M565.51,81.01c0,44.75-36.27,81.02-81.01,81.02s-81.02-36.27-81.02-81.02S439.75,0,484.5,0s81.01,36.27,81.01,81.01Z"
                            fill="red" />
                        <path
                            d="M176.71,1.27c-4.85-.36-9.74-.54-14.68-.54H37.13C16.62.73,0,17.35,0,37.86v317.62c0,20.5,16.62,37.13,37.13,37.13h110.13c4.87.37,9.8.55,14.77.55,108.36,0,196.2-87.84,196.2-196.2S278.21,8.78,176.71,1.27ZM180.78,281.44c-1.36,0-2.72-.03-4.07-.1-44.25-2.12-79.47-38.67-79.47-83.44s35.22-81.34,79.47-83.46c1.35-.07,2.71-.1,4.07-.1,46.14,0,83.54,37.42,83.54,83.56s-37.4,83.54-83.54,83.54Z" />
                    </svg>
                </a>
                <ul class="nav-links">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
                <button class="theme-toggle" id="themeToggle" title="Swap Theme">
                    <i class="fas fa-moon"></i>
                </button>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
            <div class="mobile-menu-items" id="mobile-menu-items">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#education">Education</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div class="scroll-progress" id="scroll-progress"></div>
    </header>
    @yield('main-content')

    <!-- Background Rain -->
    <div class="bg-rain" id="bgRain"></div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <h3>DIP<span> SARKER</span></h3>
                    <p>
                        A passionate developer and designer creating meaningful digital
                        experiences that make a difference.
                    </p>
                    <div class="social-btn footer-btn">
                        <a href="https://drive.google.com/file/d/1TpLjBllEDzLKQLBidjpwkzop3wHa2-gh/view?usp=sharing"
                            target="_blank" class="sbtn f-btn"><i class="fas fa-download"></i></a>
                        <a class="sbtn f-btn" href="https://www.linkedin.com/in/dip-sarker-3ba1b9321/"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="sbtn f-btn" href="https://github.com/DIP-SARKER" target="_blank"><i
                                class="fab fa-github"></i></a>
                        <a class="sbtn f-btn" href="https://x.com/NiloyDs" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a class="sbtn f-btn" href="https://www.facebook.com/dipsarkerniloy/" target="_blank">
                            <i class="fab fa-facebook-f"></i></a>
                        <a class="sbtn f-btn" href="https://www.instagram.com/dipsarkerniloy/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4><span>Quick Links</span></h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2025 DIP SARKER. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Custom Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Link JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
