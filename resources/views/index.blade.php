<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/test.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    
    <!-- Header -->
    <header id="header">
      <div class="container">
        <nav>
          <a href="#home" class="logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"></a>
          <ul class="nav-links">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
              <button
                class="theme-toggle"
                id="themeToggle"
                title="Swap Theme"
              >
                <i class="fas fa-moon"></i>
              </button>
            </li>
          </ul>
          <div class="mobile-menu">
            <i class="fas fa-bars"></i>
          </div>
        </nav>
      </div>
      <div class="scroll-progress" id="scroll-progress"></div>
    </header>

    {{-- <div class="mobile-menu" id="mobile-menu">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </div> --}}
@yield('main-content')
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
              <a href="https://drive.google.com/file/d/1TpLjBllEDzLKQLBidjpwkzop3wHa2-gh/view?usp=sharing" target="_blank" class="sbtn f-btn"
            ><i class="fas fa-download"></i></a>
              <a class="sbtn f-btn" href="https://www.linkedin.com/in/dip-sarker-3ba1b9321/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              <a class="sbtn f-btn" href="https://github.com/DIP-SARKER" target="_blank"><i class="fab fa-github"></i></a>
              <a class="sbtn f-btn" href="https://x.com/NiloyDs" target="_blank"><i class="fab fa-twitter"></i></a>
              <a class="sbtn f-btn"
                href="https://www.facebook.com/dipsarkerniloy/"
                target="_blank">
                <i class="fab fa-facebook-f"></i></a>
              <a class="sbtn f-btn" href="https://www.instagram.com/dipsarkerniloy/" target="_blank"><i class="fab fa-instagram"></i></a>
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
    <script src="{{ asset('assets/js/terminal.js') }}"></script>
</body>
</html>