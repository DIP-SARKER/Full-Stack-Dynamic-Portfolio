<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ＤＩＰ</title>
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
    <div class="nav-container">
      <a href="#" class="logo">DIP SARKER</a>
      <ul class="navlinks">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Skills</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero">
    <div class="hero-image">
    <img 
      src="https://dip-sarker.github.io/DIP_SARKER/images/home.png" 
      alt="Profile Photo" 
      class="profile-photo"
    />
    </div>
    
    <h1 id="animated-text">DIP SARKER</h1>
    <p class="tagline"> CSE Student • Software Developer • Tech Enthusiast</p>
  </header>

  <main class="content">
    <section id="about" class="about">
      <h2>About Me</h2>
      <p>
        I'm a passionate web developer focused on creating beautiful and functional user experiences.
      </p>
    </section>

    <section id="projects" class="projects">
      <h2>Projects</h2>
      <ul>
        <li><strong>Project One:</strong> A web app to manage tasks with drag & drop UI.</li>
        <li><strong>Project Two:</strong> A portfolio site using React and Tailwind CSS.</li>
      </ul>
    </section>

    <section id="contact" class="contact">
      <h2>Contact</h2>
      <p>Email: <a href="mailto:you@example.com">you@example.com</a></p>
      <p>LinkedIn: <a href="#">linkedin.com/in/yourprofile</a></p>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Your Name. All rights reserved.</p>
  </footer>
    <!-- Link JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>