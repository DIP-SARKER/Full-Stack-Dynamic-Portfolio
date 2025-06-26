<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
    <div class="nav-container">
      <a href="#home" class="logo"><img 
      src="assets\images\logo.png" 
      alt="Logo" 
      class="Logo"
    /></a>
      <ul class="navlinks">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
@yield('main-content')

  <footer>
    <p>&copy; 2025 DIP SARKER. All rights reserved.</p>
  </footer>
    <!-- Link JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>